<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = [
        'n_control',
        'nombre',
        'edad',
        'sexo',
        'fecha_nacimiento',
        'domicilio',
        'telefono'
    ];
}
