<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;

class Calificacione extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_calif';

    public function materias(){
        return $this->belongsTo(Materia::class, 'materia_id');
    }
}
