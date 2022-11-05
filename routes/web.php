<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;

Route::get('/', [HomeController::class, 'home'] );
Route::get('/alumnos', [AlumnoController::class, 'consultar'] );
Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
Route::post('/alumno/guardar', [AlumnoController::class, 'guardar']);
Route::get('/alumno/eliminar/{id}', [AlumnoController::class, 'eliminar']);
Route::get('/alumno/editar/{id}', [AlumnoController::class, 'editar']);
Route::post('/alumno/actualizar/{id}', [AlumnoController::class, 'actualizar']);