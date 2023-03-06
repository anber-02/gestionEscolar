<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Calificacione;
use App\Models\Alumno;
use App\Models\User;

class Materia extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_materia';

    public function calificaciones(){
        return $this->hasOne(Calificacione::class, 'id_materia');
    }

    public function alumnos(){
        return $this->belongsToMany(Alumno::class);
    }
    // Relacioines muchos a muchos polimorficas
    public function docentes(){
        // return $this->morphedByMany(User::class, 'grupo_materia_docente', 'grupo_materia_docentes');
        return $this->morphedByMany(User::class, 'grupo_materia_docente', 'grupo_materia_docentes', 'materia_id_materia');
    }
    public function grupos(){
        return $this->morphedByMany(Grupo::class, 'grupo_materia_docente', 'grupo_materia_docentes', 'materia_id_materia');
    }
}