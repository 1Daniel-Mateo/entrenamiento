<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $curso = new Curso();

        $curso->name = "Psiquiatria";
        $curso->descripcion = "Un curso intermedio para estudiantes en psicologia";
        $curso->categoria = "Ciencias sociales";
        $curso->curso = 403;

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = "Linux";
        $curso2->descripcion = "Un curso avanzado para profesionales en SO";
        $curso2->categoria = "Ciencias de computacion";
        $curso2->curso = 406;

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "Literatura";
        $curso3->descripcion = "Curso de escritura avanzada y reuniones sobre literatura";
        $curso3->categoria = "Lenguas";
        $curso3->curso = 404;

        $curso3->save();

    }
}
