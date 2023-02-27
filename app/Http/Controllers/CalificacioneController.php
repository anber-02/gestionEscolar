<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class CalificacioneController extends Controller
{
    //
    public function index(){
        $alumnos = Alumno::get();
        return view('calificaciones.index', ['alumnos'=> $alumnos]);
    }
}
