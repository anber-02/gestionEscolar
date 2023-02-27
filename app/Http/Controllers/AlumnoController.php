<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveAlumnoRequest;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // aplicando el middleware desde un controllador
    public function __constructor(){
        // $this->middleware('auth');//aplica el middleware a todas las rutas
        // $this->middleware('auth', ['only' => ['create', 'edit']]);//aplica el middleware solo a las rutas indicadas
        // $this->middleware('auth', ['except' => ['create', 'edit']]);//aplica el middleware a todas las rutas excepto a las indicatas
    }
    //
    public function index(){
        $alumnos = Alumno::get();

        return view('alumnos.index', ['alumnos' => $alumnos]);
    }
    
    // funciones basicas
    // get(), find(), save(), delete()
    public function show(Alumno $alumno){
        return view('alumnos.show', ['alumno' => $alumno]);
    }

    public function create(){
        return view('alumnos.create', ['alumno' => new Alumno]);
    }

    public function store(SaveAlumnoRequest $request){
        // validamos si los datos enviados tienen el mismo nombre
        // en las reglas y el input
        Alumno::create($request->validated());

        // $alumno = new Alumno;
        // $alumno->nombre = $request->input('nombre');
        // $alumno->a_paterno = $request->input('a_paterno');
        // $alumno->a_materno = $request->input('a_materno');
        // Mensajes de sesion
        // session()->flash('status','Alumno creado correctamente');
        // el metodo with -> crea mensajes de sesion flash
        return redirect()->route('alumnos.index')
                ->with('status', 'Alumno creado correctamente.');
    }

    public function edit(Alumno $alumno){
        return view('alumnos.edit', ['alumno' => $alumno]);
    }

    public function update(SaveAlumnoRequest $request, Alumno $alumno){
        // indicar que el parametro recivido es de tipo ALumno
        // nos ayuda a omitir la busqueda del alumno con el metodo find(id)
        $alumno->update($request->validated());
        // to_route() -> es como redirect()->route()
        return to_route('alumnos.show', $alumno)
        ->with('status', 'Alumno actualizado correctamente');
    }

    public function destroy(Alumno $alumno){
        $alumno->delete();
        return to_route('alumnos.index')->with('status', 'Alumno eliminado correctamente');
    }

}
