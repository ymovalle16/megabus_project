<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;


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
        return view('admin.agregarOpe');
    }

    public function addOpe(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'identification' => 'required|numeric',
            'license_expiration' => 'required|date',
        ]);

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
        $user->save();

        // Redirigir a la página de operadores con un mensaje de éxito
        return redirect()->route('operadores')->with('success', 'Operador agregado correctamente');
    }

}