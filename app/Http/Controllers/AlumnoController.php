<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveAlumnoRequest;
use App\Models\Alumno;
use App\Models\Grupo;
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
    public function index(Request $request){
        $grupo_filter = $request->get('grupo-filter');
        $grupos = Grupo::get();
        $alumnos = [];
        if($grupo_filter != 'todos' && $grupo_filter != null){
            $grupo = Grupo::where('nombre',$grupo_filter)->first();
            $alumnos = $grupo->alumnos;
        }else{
            $alumnos = Alumno::where('estado', true)->orderBy('a_paterno', 'asc')->get();
        }
        return view('alumnos.index', compact('alumnos', 'grupo_filter', 'grupos'));
    }
    
    // funciones basicas
    // get(), find(), save(), delete()
    public function show(Alumno $alumno){
        return view('alumnos.show', ['alumno' => $alumno]);
    }

    public function create(){
        $grupoAlumno = '';
        return view('alumnos.create', ['alumno' => new Alumno, 'grupos' => Grupo::get(), 'grupoAlumno' => $grupoAlumno]);
    }

    public function store(Request $request){
        // validamos si los datos enviados tienen el mismo nombre
        // en las reglas y el input
        $request->validate([
            'nombre' => 'required',
                'a_paterno' => 'required',
                'a_materno' => 'required',
                'matricula' => 'required',
                'direccion' => 'required',
                'email' => 'required',
                'telefono' => 'required',
                'grupo_id' => 'required'
        ]);


        $grupo = Grupo::find($request["grupo_id"]);
        $grupo->alumnos()->attach( Alumno::create($request->validate([
            'nombre' => 'required',
            'a_paterno' => 'required',
            'a_materno' => 'required',
            'matricula' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'telefono' => 'required',
        ])));

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
        $grupos = Grupo::get();
        $grupoAlumno = $alumno->grupos[0]->nombre;
        return view('alumnos.edit', ['alumno' => $alumno, 'grupos' => $grupos, 'grupoAlumno' => $grupoAlumno]);
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
        $alumno->update([
            "estado" => false
        ]);
        return to_route('alumnos.index')->with('status', 'Alumno eliminado correctamente');
    }

}
