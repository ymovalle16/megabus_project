<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
}
