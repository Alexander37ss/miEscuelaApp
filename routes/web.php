<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EspecialidadController;

//Alumnos
Route::get('/', [HomeController::class, 'home'] );
Route::get('/alumnos', [AlumnoController::class, 'consultar'] );
Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
Route::post('/alumno/guardar', [AlumnoController::class, 'guardar']);
Route::get('/alumno/eliminar/{id}', [AlumnoController::class, 'eliminar']);
Route::get('/alumno/editar/{id}', [AlumnoController::class, 'editar']);
Route::post('/alumno/actualizar/{id}', [AlumnoController::class, 'actualizar']);
//Especialidades
Route::get('/especialidades', [EspecialidadController::class, 'consultar']);
Route::post('/especialidades/guardar', [EspecialidadController::class, 'guardar']);
Route::get('/especialidades/registrar', [EspecialidadController::class, 'registrar']);
Route::get('/especialidades/eliminar/{id}', [EspecialidadController::class, 'eliminar']);
Route::post('/especialidades/actualizar/{id}', [EspecialidadController::class, 'actualizar']);
Route::get('/especialidades/editar/{id}', [EspecialidadController::class, 'editar']);
