<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_carrera';
    public $timestamp = false;

    public function materias(){
        return $this->belongsToMany('materias_carreras');
    }
    public function alumnos(){
        return $this->belongsToMany('carreras');
    }

}
