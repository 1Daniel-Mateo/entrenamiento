<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Llamamos al curso seeder que es donde nosotros creamos los datos de prueba
        $this->call(CursoSeeder::class);
        $this->call(UserSeeder::class); 
    }
}
