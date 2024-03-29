<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Materia;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'a_paterno',
        'a_materno',
        'rfc',
        'materia',
        'num_tel',
        'email',
        'password',
        'rol',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
// RELACIONES MUCHOS A MUCHOS POLIMORFICAS
    public function materias(){
        return $this->belongsToMany(Materia::class, 'docentes_materias', 'docente_id', 'materia_id');
    }
    public function grupos(){
        return $this->belongsToMany(Grupo::class, 'grupos_docentes', 'docente_id', 'materia_id');
    }

    
}
