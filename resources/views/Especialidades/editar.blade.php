@extends('master')

@section('contenido')
<h1>Editar datos de Especialidad</h1><hr>
    <form action="{{ url('/especialidades/actualizar')}}/{{$especialidad->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">ID:</label>
            <input value="{{$especialidad->id}}" type="text" placeholder="" class="form-control" name="id" disabled>
        </div>
        <div class="form-group">
            <label for="">Nombre:</label>
            <input value="{{$especialidad->nombre}}" type="text" placeholder="Introduce tu nombre completo" class="form-control" name="nombre" required>
        </div>
        <div>
            <input type="submit" value="Confirmar" class="btn btn-primary">
            <a href="{{ url('/especialidades') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop