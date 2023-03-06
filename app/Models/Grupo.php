<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;

class Grupo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_grupo';

    public function alumnos(){
        return $this->belongsToMany(Alumno::class, 'grupo_alumno', 'id_grupo', 'id_alumno')->where('estado','=',true)->orderBy('a_paterno', 'asc');
    }
    // public function materias(){
    //     return $this->belongsToMany(Materia::class,'grupo_materia_docente', 'id_grupo', 'id_materia');
    // }
    // public function docentes(){
    //     return $this->belongsToMany(User::class,'grupo_materia_docente', 'id_grupo', 'id_docente');
    // }

    public function materias(){
        return $this->morphToMany(Materia::class, 'grupo_materia_docente');
    }
    public function docentes(){
        return $this->morphToMany(User::class, 'grupo_materia_docente');
    }
}
