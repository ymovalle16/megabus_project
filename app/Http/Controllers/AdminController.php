<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;
use App\Models\Bus;
use App\Models\BusStatus;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function indexA() {
        // Lógica para manejar la solicitud
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $users = User::all();
        return view('admin.indexA', compact('users')); // Cambia esto por la vista que desees retornar
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

    public function addOpe(Request $request)
    {
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
        return view('admin.buses', compact('buses'));
    }

    public function agregarBus() {

        return view('admin.agregarBus');
    }

    public function addBus(Request $request)
    {
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

}