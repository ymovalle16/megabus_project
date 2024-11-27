<?php

namespace App\Http\Controllers;
use App\Models\User;

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

        // Redirigir a la página principal o dashboard
        return redirect()->route('index');
    }

    public function index() {
        // Lógica para manejar la solicitud
        return view('index'); // Cambia esto por la vista que desees retornar
    }

    
}
