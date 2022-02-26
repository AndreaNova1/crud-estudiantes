<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estudiante=new Estudiante();
        $estudiante->nombre='Juan';
        $estudiante->correo='Juan@gmial.com';
        $estudiante->grado='Segundo';
        $estudiante->save();
        Estudiante::factory(10)->create();
    }
}
