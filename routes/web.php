<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('funciones/login');
});

Route::post('/validacion', [AuthController::class, 'validacion'])->name('validacion');
Route::get('/index', [AuthController::class, 'index'])->name('index');


