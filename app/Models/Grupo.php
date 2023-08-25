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
        return $this->belongsToMany(Alumno::class, 'grupo_alumno', 'grupo_id', 'alumno_id')->where('estado','=',true)->orderBy('a_paterno', 'asc');
    }
    public function materias(){
        return $this->belongsToMany(Materia::class,'grupos_materias', 'grupo_id', 'materia_id');
    }
    public function docentes(){
        return $this->belongsToMany(User::class,'grupos_docentes', 'grupo_id', 'docente_id');
    }
}
