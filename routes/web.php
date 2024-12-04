<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('funciones/login');
});

Route::get('/funciones/login', [AuthController::class, 'login'])->name('login');
Route::post('/validacion', [AuthController::class, 'validacion'])->name('validacion');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // Rutas protegidas que requieren autenticación

Route::middleware(['auth'])->group(function () {
    Route::get('/users/indexU', [PaginaController::class, 'indexU'])->name('indexU');
    Route::get('/admin/indexA', [AdminController::class, 'indexA'])->name('indexA');
    Route::get('/admin/operadores', [AdminController::class, 'operadores'])->name('operadores');
    Route::get('/admin/agregarOpe', [AdminController::class, 'agregarOpe'])->name('agregarOpe');
    Route::post('/addOpe', [AdminController::class, 'addOpe'])->name('addOpe');


});