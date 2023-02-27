<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveDocenteRequest;
use App\Models\Docente;
use Illuminate\Http\Request;


class DocenteController extends Controller
{
    //
    public function index(){
        $docentes = Docente::get();

        return view('docentes.index', ['docentes' => $docentes]);
    }
    
    // funciones basicas
    // get(), find(), save(), delete()
    public function show(Docente $docente){
        return view('docentes.show', ['docente' => $docente]);
    }

    public function create(){
        return view('docentes.create', ['docente' => new Docente]);
    }

    public function store(SaveDocenteRequest $request){
        // validamos si los datos enviados tienen el mismo nombre
        // en las reglas y el input
        Docente::create($request->validated());

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

    public function edit(Docente $docente){
        return view('docentes.edit', ['docente' => $docente]);
    }

    public function update(SaveDocenteRequest $request, Docente $docente){
        // indicar que el parametro recivido es de tipo Docente
        // nos ayuda a omitir la busqueda del Docente con el metodo find(id)
        $docente->update($request->validated());
        // to_route() -> es como redirect()->route()
        return to_route('docentes.show', $docente)
        ->with('status', 'Docente actualizado correctamente');
    }

    public function destroy(Docente $Docente){
        $Docente->delete();
        return to_route('docentes.index')->with('status', 'Docente eliminado correctamente');
    }

}
