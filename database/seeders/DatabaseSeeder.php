<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Calificacione;
use App\Models\Grupo;
use App\Models\Materia;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $user = new Grupo;
        // $user->nombre = 'admin';
        // $user->id_docente = 1;
        // $user->id_alumno = 3;
        // $user->grado = 5;
        // $user->save();

        // $user = new User;
        // $user->name = 'admin';
        // $user->email = 'admin1@gmail.com';
        // $user->password = bcrypt('1234');
        // $user->rol = 'admin';
        // $user->save();

        // $user = new Materia;
        // $user->clave = 'esp-123';
        // $user->nombre = 'Español';
        // $user->id_docente = 1;
        // $user->id_alumno = 3;
        // $user->id_grupo = 1;
        // $user->save();

        $user = new Calificacione;
        $user->primer_parcial = 8.0;
        $user->segundo_parcial = 8.0;
        $user->tercer_parcial = 8.0;
        $user->promedio = 8.0;
        $user->id_materia = 1;
        $user->id_alumno = 2;
        $user->id_profesor = 1;
        $user->save();
        // $table->id("id_calif");
        // $table->float("primer_parcial");
        // $table->float("segundo_parcial");
        // $table->float("tercer_parcial");
        // $table->float("promedio");
        // $table->foreignId("id_materia");
        // $table->foreignId("id_alumno");
        // $table->foreignId("id_profesor");
        // $table->timestamps();


    }
}
