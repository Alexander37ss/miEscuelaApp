<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    function Consultar(){
        $alumnos = Alumno::paginate(3);
        return view('alumnos.alumnos', compact('alumnos'));
    }

    function registrar(){
        return view('alumnos.registrar');
    }

    function guardar(Request $datos){
        $alumno = Alumno::create($datos->post());

        return redirect('/alumnos');
    }
}
