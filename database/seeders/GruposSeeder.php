<?php

namespace Database\Seeders;

use App\Models\grupos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        grupos::create([
            'especialidad_id' => 2,
            'clave' => '5AVP',
            'turno' => 1,
            'semestre' => 5,
            'descripcion' => 'Grupo de programacion vespertino'
        ]);
        grupos::create([
            'especialidad_id' => 3,
            'clave' => '1AMP',
            'turno' => 0,
            'semestre' => 1,
            'descripcion' => 'Grupo de programacion matutino'
        ]);
        grupos::create([
            'especialidad_id' => 5,
            'clave' => '3AMO',
            'turno' => 0,
            'semestre' => 3,
            'descripcion' => 'Grupo de ofimatica matutino'
        ]);
        grupos::create([
            'especialidad_id' => 4,
            'clave' => '5AVC',
            'turno' => 1,
            'semestre' => 5,
            'descripcion' => 'Grupo de construccion matutino'
        ]);
    }
}
