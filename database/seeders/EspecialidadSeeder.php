<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidad::create([
            'nombre' => 'Ofimatica'
        ]);
        Especialidad::create([
            'nombre' => 'Programacion'
        ]);
        Especialidad::create([
            'nombre' => 'Contabilidad'
        ]);
        Especialidad::create([
            'nombre' => 'Electronica'
        ]);
        Especialidad::create([
            'nombre' => 'Diseño Grafico'
        ]);
    }
}
