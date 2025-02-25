<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;
use App\Models\Bus;
use App\Models\BusStatus;
use App\Models\Tab;
use Illuminate\Http\Request;
use App\Models\DailyAssignment;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function indexA($dia = null) {
        // Lógica para manejar la solicitud
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $users = User::all();
        // Definir los prefijos de los días
        $prefijosDias = [
            'L' => 'lunes',
            'M' => 'martes',
            'MC' => 'miercoles',
            'J' => 'jueves',
            'V' => 'viernes',
            'S' => 'sabado',
            'D' => 'domingo',
        ];

        // Si no se pasa el parámetro $dia, calcular el día siguiente al actual
        if ($dia === null) {
            $fechaHoy = new \DateTime();
            $diaActual = $fechaHoy->format('w'); // Obtener el día de la semana actual (0=domingo, 1=lunes, ..., 6=sábado)
            $diaSiguiente = ($diaActual + 1) % 7; // Calcular el día siguiente (0=domingo, 1=lunes, ..., 6=sábado)

            // Mapear el número del día a las letras correspondientes
            $mapaDias = [0 => 'D', 1 => 'L', 2 => 'M', 3 => 'MC', 4 => 'J', 5 => 'V', 6 => 'S'];
            $dia = $mapaDias[$diaSiguiente];
        }

        // Validar que el prefijo sea válido
        if (!array_key_exists($dia, $prefijosDias)) {
            return redirect()->back()->with('error', 'Día inválido');
        }

        // Obtener las rutas que comienzan con el prefijo del día
        $rutas = Tab::where('code', 'like', $dia . '%')->get();
        $operadores = User::where('role_id', 2)->get();

        return view('admin.indexA', compact('users', 'rutas', 'operadores', 'dia', 'prefijosDias'));
    }

    public function operadores() {
        $stat = Status::all();
        $users = User::whereHas('role', function ($query) {
            $query->where('role_id', '=', '2');
        })->with('status', 'role')->get();        
        return view('admin.operadores', compact('users', 'stat'));
    }

    public function agregarOpe() {
        $availableBuses = Bus::whereHas('status', function ($query) {
            $query->where('status_name', '=', 'Disponible');
        })->get();
        return view('admin.agregarOpe', compact('availableBuses'));
    }

    public function addOpe(Request $request) {
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'identification' => 'required|numeric',
            'license_expiration' => 'required|date',
            'bus_code' => 'required|string|max:20', // Permitir "Sin código" como válido
        ]);

        // Manejar el bus_code
        $busCode = $validated['bus_code'] === 'Sin código' ? null : $validated['bus_code']; // Cambia 'Sin código' a null

        // Verificar si ya existe un operador con el mismo número de identificación
        if (User::where('identification', $validated['identification'])->exists()) {
            return redirect()->back()->withInput()->withErrors([
                'identification' => 'Ya existe un operador con este número de identificación',
            ]);
        }

        // Crear un nuevo usuario (operador) con role_id = 2
        $user = new User();
        $user->name = $validated['name'];
        $user->identification = $validated['identification'];
        $user->license_expiration = $validated['license_expiration'];
        $user->role_id = 2; // Asignar role_id con el valor de 2
        $user->status = 1;
        $user->bus_code = $busCode; // Usar $busCode
        $user->save();

        // Solo actualizar el estado del bus si se eligió un bus válido
        if ($busCode !== null) {
            $bus = Bus::where('code', $busCode)->first();

            if ($bus) { // Verificar si el bus existe
                $assignedStatus = BusStatus::where('status_name', 'Asignada')->first(); 
                $bus->status = $assignedStatus->id;
                $bus->save();
            }
        }

        // Redirigir a la página de operadores con un mensaje de éxito
        return redirect()->route('operadores')->with('success', 'Operador agregado correctamente');
    }

    public function buses() {
        $buses = Bus::all();
        $status = BusStatus::where('status_name', '!=', 'Asignada')->get();

        $buses = Bus::whereHas('status', function ($query) {
            $query->where('status_name', '!=', 'Asignada');
        })->with('status')->get();

        return view('admin.buses', compact('buses', 'status'));
    }

    public function agregarBus() {
        return view('admin.agregarBus');
    }

    public function addBus(Request $request) {
        // Validar los datos del formulario
        $validated = $request->validate([
            'code' => 'required|string|max:5',
        ]);

        // Verificar si ya existe un bus con el mismo número de identificación
        if (Bus::where('code', $validated['code'])->exists()) {
            return redirect()->back()->withInput()->withErrors([
                'code' => 'Ya existe un bus con este código',
            ]);
        }

        $bus = new Bus();
        $bus->code = $validated['code'];
        $bus->status = 1;
        $bus->save();

        // Redirigir a la página de buses con un mensaje de éxito
        return redirect()->route('buses')->with('success', 'Bus agregado correctamente');
    }

    public function editOpe($id) {
        $user = User::find($id);
        $statusBus = BusStatus::all();
        $availableBuses = Bus::whereHas('status', function ($query) {
            $query->where('status_name', '=', 'Disponible');
        })->get();
        $status = Status::all();
        return view('admin.editOpe', compact('user', 'statusBus', 'availableBuses', 'status'));
    }

    public function actualizarOperador(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:155',
            'status' => 'sometimes|required|exists:statuses,id',
            'license_expiration' => 'nullable|date',
            'current_bus_status_id' => 'nullable|exists:bus_statuses,id',
            'new_bus_code' => 'nullable|exists:buses,code',
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $validated['name'];
        $user->status = $validated['status'];
        $user->license_expiration = $validated['license_expiration'];
    
        // Manejar la lógica del cambio de bus
        if ($request->change_bus === 'yes') {
            // Actualizar el estado del bus actual si existe
            if ($user->bus_code && $request->current_bus_status) {
                $currentBus = Bus::where('code', $user->bus_code)->first();
                if ($currentBus) {
                    $currentBus->status = $validated['current_bus_status_id'];
                    $currentBus->save();
                }
            }
    
            // Asignar nueva buseta al operador
            if ($request->new_bus_code) {
                $newBus = Bus::where('code', $validated['new_bus_code'])->first();
                if ($newBus) {
                    $assignedStatus = BusStatus::where('status_name', 'Asignada')->first();
                    if ($assignedStatus) {
                        $newBus->status = $assignedStatus->id;
                        $newBus->save();
                        $user->bus_code = $validated['new_bus_code']; // Asignar el nuevo bus al operador
                    } else {
                        return redirect()->back()->withErrors(['error' => 'El estado "Asignada" no se encuentra en la base de datos.']);
                    }
                } else {
                    return redirect()->back()->withErrors(['error' => 'El nuevo bus no se encuentra en la base de datos.']);
                }
            } else {
                // Si no se selecciona nuevo bus, poner el campo bus_code a null
                $user->bus_code = null;
            }
        } else if (!$user->bus_code && $request->new_bus_code) {
            // Asignar bus a un operador que no tenía bus previamente
            $newBus = Bus::where('code', $validated['new_bus_code'])->first();
            if ($newBus) {
                $assignedStatus = BusStatus::where('status_name', 'Asignada')->first();
                if ($assignedStatus) {
                    $newBus->status = $assignedStatus->id;
                    $newBus->save();
                    $user->bus_code = $validated['new_bus_code']; // Asignar el nuevo bus al operador
                } else {
                    return redirect()->back()->withErrors(['error' => 'El estado "Asignada" no se encuentra en la base de datos.']);
                }
            } else {
                return redirect()->back()->withErrors(['error' => 'El nuevo bus no se encuentra en la base de datos.']);
            }
        }
    
        // Guardar los cambios del operador
        $user->save();
    
        // Redirigir a la página principal con un mensaje de éxito
        return redirect()->route('operadores')->with('success', 'Operador actualizado exitosamente');
    }

    public function cambiarEstado(Request $request, Bus $id) {
        // Validar el estado recibido
        $validated = $request->validate([
            'status' => 'required|exists:bus_statuses,id', // Verificamos que el estado exista en la base de datos
        ]);

        // Actualizar el estado del bus
        $id->status = $request->input('status');
        $id->save();

        // Redirigir con mensaje de éxito
        return redirect()->route('buses')->with('success', 'Estado actualizado correctamente');
    }

    public function tablas() {
        $asignaciones = DailyAssignment::with(['tab', 'operador'])
            ->where('assignment_date', Carbon::tomorrow()->format('Y-m-d'))
            ->get();
            
        return view('admin.tablas', compact('asignaciones'));
    }

    public function showAsignacion($dia)
    {
        // Definir los prefijos de los días
        $prefijosDias = [
            'L' => 'lunes',  
            'M' => 'martes',
            'MC' => 'miercoles',
            'J' => 'jueves',
            'V' => 'viernes',
            'S' => 'sabado',
            'D' => 'domingo',
        ];

        // Validar que el prefijo sea válido
        if (!array_key_exists($dia, $prefijosDias)) {
            return redirect()->back()->with('error', 'Día inválido');
        }

        // Obtener las rutas que comienzan con el prefijo del día
        $rutas = Tab::where('code', 'like', $dia . '%')->get();

        // Obtener solo los usuarios con role_id igual a 2 (operadores)
        $operadores = User::where('role_id', 2)->get();

        return view('asignacion', compact('rutas', 'operadores', 'dia', 'prefijosDias'));
    }

        public function asignarRutas(Request $request)
    {
        // Obtener la fecha de mañana
        $fechaManana = date('Y-m-d', strtotime('+1 day'));
    
        // Validar que el campo operadores esté presente y no sea nulo
        if ($request->has('operadores') && is_array($request->operadores)) {
            foreach ($request->operadores as $ruta_id => $operador_id) {
                // Crear una nueva asignación diaria
                DailyAssignment::create([
                    'tab_id' => $ruta_id,
                    'operator_id' => $operador_id,
                    'assignment_date' => $fechaManana,
                ]);
            }
    
            return redirect()->back()->with('success', 'Asignaciones guardadas con éxito');
        } else {
            return redirect()->back()->withErrors(['No se han recibido operadores o el formato es incorrecto.']);
        }
    }
}

        
