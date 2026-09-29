<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\InteresController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('personas', PersonaController::class);
    Route::resource('interes', InteresController::class);
    Route::get('/usuarios', [UserController::class, 'index'])
        ->name('usuarios.index');
});

Route::get('/', function () {
    return view('welcome');
});
