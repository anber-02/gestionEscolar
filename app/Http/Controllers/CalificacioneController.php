<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Calificacione;
use App\Models\User;
use Illuminate\Http\Request;

class CalificacioneController extends Controller
{
    //
    public function index(Request $request){

        $docente = auth()->user()->id;
        $materias = User::find($docente);
        // $materias->materias;
        // $grupo = $request->get('grupo');
        // $resultado = Alumno::get();
        // $resultado = Alumno::join('grupos', "grupos.id_grupo", '=', 'alumnos.grupos_idgrupo')
        //             ->join('calificaciones', "calificaciones.id_alumno", '=', 'alumnos.id_alumno')
        //             ->join('materias', "materias.id_usuario", '=', 'alumnos.id_alumno')
        //             ->select(
        //                 "alumnos.id_alumno",
        //                 "alumnos.nombre",
        //                 "alumnos.a_paterno", 
        //                 "alumnos.a_materno",
        //                 "calificaciones.primer_parcial",
        //                 "calificaciones.segundo_parcial",
        //                 "calificaciones.tercer_parcial",
        //                 "calificaciones.promedio",
        //                 "materias.id_materia",
        //                 "materias.nombre AS materia",
        //                 "grupos.num_grupo"
        //                 )
        //             ->get();

        //  $materia = $resultado;

        //  return $materia[0]->materia; 
        // return $materias;
        $alumnos = Alumno::get();
        return view('calificaciones.index',compact('alumnos'));

    }

    public function update(Request $request,Calificacione $calificacion){
        $calificacion->update($request->validated());

        return 'actualizado correctamente';
    }

}
