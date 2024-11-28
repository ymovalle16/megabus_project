<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    //
    public function index() {
        // Lógica para manejar la solicitud
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return view('index'); // Cambia esto por la vista que desees retornar
    }
}
