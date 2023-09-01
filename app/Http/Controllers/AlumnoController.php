<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveAlumnoRequest;
use App\Models\Alumno;
use App\Models\Grupo;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // aplicando el middleware desde un controllador
    public function __constructor()
    {
        // $this->middleware('auth');//aplica el middleware a todas las rutas
        // $this->middleware('auth', ['only' => ['create', 'edit']]);//aplica el middleware solo a las rutas indicadas
        // $this->middleware('auth', ['except' => ['create', 'edit']]);//aplica el middleware a todas las rutas excepto a las indicatas
    }
    //
    public function index(Request $request)
    {
        $grupo_filter = $request->get('grupo-filter');
        $matricula = $request->get('buscar');
        $alumnos = Alumno::getAllAlumnos($matricula, $grupo_filter);

        $grupos = Grupo::get();
        return view('alumnos.index', compact('alumnos', 'grupo_filter', 'grupos'));
    }

    public function show(Alumno $alumno)
    {
        return view('alumnos.show', ['alumno' => $alumno]);
    }

    public function create()
    {
        $grupoAlumno = '';
        return view('alumnos.create', ['alumno' => new Alumno, 'grupos' => Grupo::get(), 'grupoAlumno' => $grupoAlumno]);
    }

    public function store(SaveAlumnoRequest $request)
    {
        Alumno::create($request->except("_token"));

        return redirect()->route('alumnos.index')
            ->with('status', 'Alumno creado correctamente.');
    }

    public function edit($alumno)
    {
        $alumno = Alumno::getAlumnoById($alumno);
        $grupos = Grupo::get();
        return view('alumnos.edit', ['alumno' => $alumno, 'grupos' => $grupos]);
    }

    public function update(SaveAlumnoRequest $request, Alumno $alumno)
    {
        $data = $request->except(['grupo_id', '_token', '_method']);
        $alumno->update($data);
        $alumno->grupos()->attach($request->grupo_id);
        // to_route() -> es como redirect()->route()
        return to_route('alumnos.show', $alumno)
            ->with('status', 'Alumno actualizado correctamente');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->update([
            "estado" => false
        ]);
        return to_route('alumnos.index')->with('status', 'Alumno eliminado correctamente');
    }
}
