<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;

Route::get('/', [HomeController::class, 'home'] );
Route::get('/alumnos', [AlumnoController::class, 'consultar'] );
