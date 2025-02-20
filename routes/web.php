<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TabController;


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
    Route::get('/admin/buses', [AdminController::class, 'buses'])->name('buses');
    Route::get('/admin/agregarBus', [AdminController::class, 'agregarBus'])->name('agregarBus');
    Route::post('/addBus', [AdminController::class, 'addBus'])->name('addBus');
    Route::get('/admin/editOpe/{id}', [AdminController::class, 'editOpe'])->name('editOpe');
    Route::put('admin/editOpe/{id}', [AdminController::class, 'actualizarOperador'])->name('actualizarOperador');
    Route::patch('/admin/buses/{id}', [AdminController::class, 'cambiarEstado'])->name('cambiarEstadoBus');
    Route::get('/admin/tablas', [AdminController::class, 'tablas'])->name('tablas');
    // Route::post('/api/tabs', [TabController::class, 'store']);}

    // Ruta para el dashboard con parámetro opcional $dia
    Route::get('/admin/indexA/{dia?}', [AdminController::class, 'indexA'])->name('indexA');
    // Ruta para procesar el formulario de asignación de rutas
    Route::post('/asignacion-rutas', [AdminController::class, 'asignarRutas'])->name('asignar_rutas');

    
});