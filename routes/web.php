<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaginaController;



Route::get('/', function () {
    return view('funciones/login');
});

Route::get('/funciones/login', [AuthController::class, 'login'])->name('login');
Route::post('/validacion', [AuthController::class, 'validacion'])->name('validacion');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // Rutas protegidas que requieren autenticación

Route::middleware(['auth'])->group(function () {
    Route::get('/index', [PaginaController::class, 'index'])->name('index');

});