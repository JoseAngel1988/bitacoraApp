<?php

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\IndicadorController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PuntoController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estado', [EstadoController::class, "conexion"]);

Route::resource('/registro',RegistroController::class);

Route::resource('/inicio',InicioController::class);

Route::resource('/indicador', IndicadorController::class);

Route::resource('/punto', PuntoController::class);

Route::get('/punto/{punto}', [PuntoController::class, 'show']);

Route::delete('/punto/{id}', [PuntoController::class, 'destroy'])->name('punto.destroy');








