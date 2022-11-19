<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EspecialidadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Alumnos
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
    Route::get('/', [HomeController::class, 'home'] );
});

require __DIR__.'/auth.php';
