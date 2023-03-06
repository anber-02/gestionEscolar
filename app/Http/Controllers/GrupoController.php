<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

class GrupoController extends Controller
{
    //
    public function index(){
        $docentes = User::orderBy('a_paterno', 'asc')->get()->where('rol', '!==', 'admin');

        return view('docentes.index', ['docentes' => $docentes]);
    }
    
    // funciones basicas
    // get(), find(), save(), delete()
    public function show(User $docente){
        return view('docentes.show', ['docente' => $docente]);
    }

    public function create(){
        return view('docentes.create', ['docente' => new User]);
    }

    public function store(SaveDocenteRequest $request){
        // validamos si los datos enviados tienen el mismo nombre
        // en las reglas y el input
        User::create([
            'nombre' => $request->nombre,
            'a_paterno' => $request->a_paterno,
            'a_materno' => $request->a_materno,
            'materia' => $request->materia,
            'num_tel' => $request->num_tel,
            'email' => $request->email,
            'rfc' => $request->rfc,
            'password' => bcrypt($request->password)
        ]);






        // 'nombre' => 'required',
        //     'a_paterno' => 'required',
        //     'a_materno' => 'required',
        //     'materia' => [],
        //     'num_tel' => 'required',
        //     'email' => 'required',
        //     'rfc' => 'required',
        //     'password' => 'required',

        // $Docente = new Docente;
        // $Docente->nombre = $request->input('nombre');
        // $Docente->a_paterno = $request->input('a_paterno');
        // $Docente->a_materno = $request->input('a_materno');
        // Mensajes de sesion
        // session()->flash('status','Docente creado correctamente');
        // el metodo with -> crea mensajes de sesion flash
        return redirect()->route('docentes.index')
                ->with('status', 'Docente creado correctamente.');
    }

    public function edit(User $docente){
        return view('docentes.edit', ['docente' => $docente]);
    }

    public function update(SaveDocenteRequest $request, User $docente){
        // indicar que el parametro recivido es de tipo Docente
        // nos ayuda a omitir la busqueda del Docente con el metodo find(id)
        $docente->update($request->validated());
        // to_route() -> es como redirect()->route()
        return to_route('docentes.show', $docente)
        ->with('status', 'Docente actualizado correctamente');
    }

    public function destroy(User $Docente){
        $Docente->delete();
        return to_route('docentes.index')->with('status', 'Docente eliminado correctamente');
    }

}
