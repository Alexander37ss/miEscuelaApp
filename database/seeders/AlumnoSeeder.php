<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'n_control' => '203263041701',
            'nombre' => 'Francisco López',
            'edad' => '18',
            'sexo' => '1',
            'fecha_nacimiento' => '2004-12-01',
            'domicilio' => 'Calle Santana Col Cedros y Num_Interior 2565',
            'telefono' => '6673012082'
        ]);
        Alumno::create([
            'n_control' => '2441100897523',
            'nombre' => 'Ary Lopez',
            'edad' => '17',
            'sexo' => '1',
            'fecha_nacimiento' => '2005-04-29',
            'domicilio' => 'Calle Carlos L. Gracidas Col Palmito y Num_Interior 2864',
            'telefono' => '6671431757'
        ]);
        Alumno::create([
            'n_control' => '2441100897523',
            'nombre' => 'Ary Lopez',
            'edad' => '17',
            'sexo' => '1',
            'fecha_nacimiento' => '2005-04-29',
            'domicilio' => 'Calle Carlos L. Gracidas Col Palmito y Num_Interior 2864',
            'telefono' => '6671431757'
        ]);
        Alumno::create([
            'n_control' => '2441100897523',
            'nombre' => 'Ary Lopez',
            'edad' => '17',
            'sexo' => '1',
            'fecha_nacimiento' => '2005-04-29',
            'domicilio' => 'Calle Carlos L. Gracidas Col Palmito y Num_Interior 2864',
            'telefono' => '6671431757'
        ]);
        Alumno::create([
            'n_control' => '2441100897523',
            'nombre' => 'Ary Lopez',
            'edad' => '17',
            'sexo' => '1',
            'fecha_nacimiento' => '2005-04-29',
            'domicilio' => 'Calle Carlos L. Gracidas Col Palmito y Num_Interior 2864',
            'telefono' => '6671431757'
        ]);
        Alumno::create([
            'n_control' => '2441100897523',
            'nombre' => 'Ary Lopez',
            'edad' => '17',
            'sexo' => '1',
            'fecha_nacimiento' => '2005-04-29',
            'domicilio' => 'Calle Carlos L. Gracidas Col Palmito y Num_Interior 2864',
            'telefono' => '6671431757'
        ]);
        Alumno::create([
            'n_control' => '2441100897523',
            'nombre' => 'Ary Lopez',
            'edad' => '17',
            'sexo' => '1',
            'fecha_nacimiento' => '2005-04-29',
            'domicilio' => 'Calle Carlos L. Gracidas Col Palmito y Num_Interior 2864',
            'telefono' => '6671431757'
        ]);
    }
}
