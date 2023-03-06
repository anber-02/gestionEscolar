<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alumno;
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

        // GRUPOS
        $grupo1 = Grupo::create([
            'nombre' => 't-502',
            'num_grado' => 5,
        ]);
        $grupo2 = Grupo::create([
            'nombre' => 't-501',
            'num_grado' => 5,
        ]);
        $grupo3 = Grupo::create([
            'nombre' => 't-202',
            'num_grado' => 2,
        ]);

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
        // ALUMNOS
        $alumno1 = Alumno::create([
            'nombre' => 'luis',
            'a_paterno' => 'mendoza',
            'a_materno' => 'vasquez',
            'telefono' => '9511232045',
            'email' => 'luis@gmail.com',
            'direccion' => 'luis2015',
            'matricula' => 'utti1234',
        ]);
        $alumno2 = Alumno::create([
            'nombre' => 'guadalupe',
            'a_paterno' => 'sanchez',
            'a_materno' => 'romero',
            'telefono' => '9511232045',
            'email' => 'saro@gmail.com',
            'direccion' => 'camino real',
            'matricula' => 'utti1234',
        ]);
        $alumno3 = Alumno::create([
            'nombre' => 'victor',
            'a_paterno' => 'sanchez',
            'a_materno' => 'romero',
            'telefono' => '9511232045',
            'email' => 'victor@gmail.com',
            'direccion' => 'san nicolas',
            'matricula' => 'utti1234',
        ]);
        $alumno4 = Alumno::create([
            'nombre' => 'minina',
            'a_paterno' => 'pablo',
            'a_materno' => 'garcia',
            'telefono' => '9511232045',
            'email' => 'minina@gmail.com',
            'direccion' => 'camino viejo',
            'matricula' => 'utti1234',
        ]);

        // MATERIAS
        $materia1 = Materia::create([
            'nombre' => 'aplicaciones moviles',
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
            'nombre' => 'creacion de juegos',
            'duracion' => '50 horas',
        ]);

        $calificaciones1 = Calificacione::create([
            'primer_parcial' => 8.0,
            'segundo_parcial' => 8.0,
            'tercer_parcial' => 8.0,
            'promedio' => 8.0,
            'id_materia' => 1,
            'id_docente' => 1,
            'id_alumno' => 1,
        ]);
        $calificaciones2 = Calificacione::create([
            'primer_parcial' => 8.0,
            'segundo_parcial' => 8.0,
            'tercer_parcial' => 8.0,
            'promedio' => 8.0,
            'id_materia' => 1,
            'id_docente' => 1,
            'id_alumno' => 2,
        ]);

        $calificaciones3 = Calificacione::create([
            'primer_parcial' => 8.0,
            'segundo_parcial' => 8.0,
            'tercer_parcial' => 8.0,
            'promedio' => 8.0,
            'id_materia' => 1,
            'id_docente' => 1,
            'id_alumno' => 3,
        ]);

        $materia1->calificaciones()->save($calificaciones1);


        $alumno1->materias()->attach($materia1);
        $alumno1->materias()->attach($materia3);
        $alumno2->materias()->attach($materia1);
        $alumno2->materias()->attach($materia3);
        $alumno3->materias()->attach($materia2);
        $alumno4->materias()->attach($materia2);
        $alumno4->materias()->attach($materia1);
        $alumno4->materias()->attach($materia4);
        
        // ASIGNANDO ALUMNOS A LOS GRUPOS
        $grupo1->alumnos()->attach($alumno1);
        $grupo1->alumnos()->attach($alumno2);
        $grupo2->alumnos()->attach($alumno3);
        $grupo3->alumnos()->attach($alumno4);
        // Asignando un docentes a las materias
        $materia1->docentes()->attach($user2);
        $materia2->docentes()->attach($user2);
        $materia2->docentes()->attach($user3);
        $materia3->docentes()->attach($user4);

        // Asignando materias para cada grupo

        $grupo1->materias()->attach($materia1);
        $grupo1->materias()->attach($materia2);
        $grupo1->materias()->attach($materia3);
        $grupo1->materias()->attach($materia4);

        $grupo2->materias()->attach($materia1);
        $grupo2->materias()->attach($materia2);

        $grupo3->materias()->attach($materia2);
    }
}
