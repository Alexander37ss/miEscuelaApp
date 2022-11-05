<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    function consultar(){
        $especialidades = Especialidad::paginate(5);
        return view('Especialidades.especialidades', compact('especialidades'));
    }
    function guardar(Request $datos){
        $especialidad = Especialidad::create($datos->post());

        return redirect('/especialidades');
    }
    function registrar(){
        return view('Especialidades.registrar');
    }
    function eliminar($id){
        $especialidad = Especialidad::find($id);
        $especialidad -> delete();

        return redirect('/especialidades');
    }

    function actualizar(Request $datos, $id){
        $especialidad = Especialidad::find($id);
        $especialidad->nombre = $datos->input('nombre');
        $especialidad->save();

        return redirect('/especialidades');
    }

    function editar($id){
        $especialidad = Especialidad::find($id);

        return view('/especialidades.editar', compact('especialidad'));
    }
}
