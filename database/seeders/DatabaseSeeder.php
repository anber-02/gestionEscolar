<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alumno;
use App\Models\Calificacione;
use App\Models\Grupo;
use App\Models\Materia;
use App\Models\User;
use App\Models\Carrera;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // DOCENTES - ADMINISTRADOR
        $user1 = User::create([
            'nombre' => 'anber',
            'a_paterno' => 'mendoza',
            'a_materno' => 'vasquez',
            'num_tel' => '9511232045',
            'email' => 'admin@gmail.com',
            'rfc' => 'anber2015',
            'rol' => 'admin',
            'password' => bcrypt('1234'),
        ]);
        $user2 = User::create([
            'nombre' => 'erick',
            'a_paterno' => 'corro',
            'a_materno' => 'pacheco',
            'num_tel' => '9511232045',
            'email' => 'erick@gmail.com',
            'rfc' => 'erick2015',
            'password' => bcrypt('1234'),
        ]);
        $user3 = User::create([
            'nombre' => 'esli',
            'a_paterno' => 'hernandez',
            'a_materno' => 'blass',
            'num_tel' => '9511232045',
            'email' => 'esli@gmail.com',
            'rfc' => 'esli2015',
            'password' => bcrypt('1234'),
        ]);
        $user4 = User::create([
            'nombre' => 'elmer',
            'a_paterno' => 'hernandez',
            'a_materno' => 'hernandez',
            'num_tel' => '9511232045',
            'email' => 'elmer@gmail.com',
            'rfc' => 'elmer2015',
            'password' => bcrypt('1234'),
        ]);
       

        // MATERIAS
        $materia1 = Materia::create([
            'nombre' => 'aplicaciones móviles',
            'duracion' => '50 horas',
        ]);
        $materia2 = Materia::create([
            'nombre' => 'aplicaciones web',
            'duracion' => '50 horas',
        ]);
        $materia3 = Materia::create([
            'nombre' => 'aplicaciones iot',
            'duracion' => '50 horas',
        ]);
        $materia4 = Materia::create([
            'nombre' => 'creación de juegos',
            'duracion' => '50 horas',
        ]);
        

        // Carreras
        $carrera1 = Carrera::create([
            'nombre' => 'mecatrónica',
            'tag' => "mt",
        ]);
        $carrera2 = Carrera::create([
            'nombre' => 'gastronomía',
            'tag' => "ga",
        ]);
        $carrera3 = Carrera::create([
            'nombre' => 'tecnologías de la información',
            'tag' => "ti",
        ]);
    }
}
