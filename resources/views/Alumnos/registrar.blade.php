@extends('master')

@section('contenido')
    <h1>Registrar Alumno</h1><hr>
    <form action="{{ url('/alumno/guardar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">No. Control:</label>
            <input type="text" placeholder="Introduce tu numero de control" class="form-control" name="n_control" required>
        </div>
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" placeholder="Introduce tu nombre completo" class="form-control" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="">Edad:</label>
            <input type="number" placeholder="Introduce tu edad" class="form-control" name="edad" required>
        </div>
        <label for="">Sexo:</label><br>
        <input type="radio" name="sexo" value="1"> Másculino <br>
        <input type="radio" name="sexo" value="0"> Femenino <br><br>
        <div class="form-group">
            <label for="">Fecha de nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" required>
        </div>
        <div class="form-group">
            <label for="">Domicilio:</label>
            <textarea name="domicilio" placeholder="Introduce tu domicilio" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Teléfono:</label>
            <input type="text"  placeholder="Introduce tu teléfono" class="form-control" name="telefono" required>
        </div>
        <div>
            <input type="submit" value="Registrar" class="btn btn-primary">
            <a href="{{ url('/alumnos') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop