<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('funciones.login'); // Mostrar la vista de login si no está autenticado
    }  

    public function validacion(Request $request)
    {
        // Validar el campo del documento
        $request->validate([
            'identification' => 'required|numeric',  // Asegúrate de que el campo sea un número
        ]);
    
        // Buscar el usuario por el número de documento
        $usuario = User::where('identification', $request->identification)->first();
    
        if (!$usuario) {
            // Si no se encuentra un usuario con ese número de documento
            return redirect()->back()->withErrors(['error' => 'El número de identificación no se encuentra en la base de datos']);
        }
        // Iniciar sesión con el usuario encontrado
        Auth::login($usuario);
    
        // Verificar el rol del usuario
        if ($usuario->role_id == 1) {
            // Si el rol es 1, redirigir a la ruta 'indexA'
            return redirect()->route('indexA');
        } elseif ($usuario->role_id == 2) {
            // Si el rol es 2, redirigir a la ruta 'indexU'
            return redirect()->route('indexU');
        }

        return redirect()->route('login')->withErrors(['error' => 'Rol no válido']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // Redirigir al login
    }
    
}
