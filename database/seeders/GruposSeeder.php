<?php

namespace Database\Seeders;

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
        Grupo::create([
            'clave' => '5AVP',
            'turno' => 1,
            'semestre' => 5,
            'descripcion' => 'Grupo de programacion vespertino'
        ]);
        Grupo::create([
            'clave' => '1AMP',
            'turno' => 0,
            'semestre' => 1,
            'descripcion' => 'Grupo de programacion matutino'
        ]);
        Grupo::create([
            'clave' => '3AMO',
            'turno' => 0,
            'semestre' => 3,
            'descripcion' => 'Grupo de programacion matutino'
        ]);
        Grupo::create([
            'clave' => '5AVC',
            'turno' => 1,
            'semestre' => 5,
            'descripcion' => 'Grupo de construccion matutino'
        ]);
    }
}
