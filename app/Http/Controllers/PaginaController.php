<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    //
    public function indexU() {
        // Lógica para manejar la solicitud
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $userss = User::all();
        return view('users.indexU', compact('userss')); // Cambia esto por la vista que desees retornar
    }
}
