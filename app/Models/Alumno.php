<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;
use App\Models\Grupo;
// use app\Models\Calificacione;

/**
 * @property $id_alumno;
 * 
 */

class Alumno extends Model
{
	use HasFactory;
	protected $primaryKey = 'id_alumno';
	// protected $fillable = ['id_alumno','nombre','a_paterno','a_materno','matricula','edad','direccion_alumno','email_alumno','telefono_alumno','grado','nombre_tutor','a_paterno_tutor','a_materno_tutor','email_tutor','telefono_tutor','direccion_tutor'];
	/**
	 * 
	 * podemos omitir la variable fillable para la proteccion de datos masivos
	 * siempre y cuando nunca pasemos en el controlador a los
	 * metodos create, update el metodo
	 * request()->all() -- por que esto pasa todos los datos y los intenta
	 * insertar en la base de datos..
	 * 
	 * una buena solucion en pasar el metodo
	 * $request -> validated() -> con las validaciones hechas
	 * asi evitamos que el usuario agregue datos extra a la base de datos
	 * 
	 * para omiter la variable $fiilable
	 * escribimos lo siguiente para evitar errores
	 * 
	 * protected $guarded = [] ->definimos campos que no pueden ser asignaoos
	 * de forma masiva al pasarle un [] vacio desabilitamos 
	 * la proteccion con la asignacion masiva
	 */
	protected $guarded = [];
	public function materias()
	{
		return $this->belongsToMany(Materia::class);
	}
	public function grupos()
	{
		return $this->belongsToMany(Grupo::class, 'grupos_alumnos', 'alumno_id', 'grupo_id');
	}

	public static function getAllAlumnos($buscar = '', $grupo = '')
	{
		$alumnos = Alumno::with('grupos')
			->when($grupo, function ($query, $grupo) {
				if ($grupo == "todos") return;
				return $query->whereHas('grupos', function ($q) use ($grupo) {
					$q->where('id_grupo', '=', $grupo);
				});
			})
			->Where(function ($q) use ($buscar) {
				$q->where('matricula', 'like', '%' . $buscar . '%');
			})
			->where('estado', 1)
			->get();

		$alumnosConGrupo = $alumnos->map(function ($alumno) {
			$grupo = $alumno->grupos->last() ?? null;
			$alumno->grupo = $grupo  ? $grupo->nombre : 'Sin grupo';
			return $alumno;
		});

		return $alumnosConGrupo;
	}
	public static function getAlumnoById($alumno)
	{
		$alumnos = Alumno::with('grupos')
			->where('id_alumno', $alumno)
			->where('estado', 1)->get();

		$alumnosConGrupo = $alumnos->map(function ($alumno) {
			$grupo = $alumno->grupos[0] ?? null;
			$alumno->grupo = $grupo  ? $grupo->nombre : 'Sin grupo';
			return $alumno;
		});


		return $alumnosConGrupo[0];
	}
}
