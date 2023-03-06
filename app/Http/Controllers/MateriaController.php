<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\User;

class MateriaController extends Controller
{
    //
    public function index(){
        $materia = Materia::orderBy('nombre', 'asc')->get();
        return view('materias.index', ['materias' => $materia]);
    }
    
    // funciones basicas
    // get(), find(), save(), delete()
    public function show(Materia $materia){
        return view('materias.show', ['materia' => $materia]);
    }

    public function create(){
        $grupos = Grupo::get();
        $docentes = User::where('rol',null)->get();
        return view('materias.create', ['materia' => new Materia, 'grupos' => $grupos, 'docentes' => $docentes]);
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'duracion' => 'required',
            'grupo_id' => 'required',
            'docente_id' => 'required',
        ]);
        $docenteId = $request['docente_id'];
        $grupoId = $request['grupo_id'];


        $grupo = Grupo::find($grupoId);
        $materia = Materia::create([
            'nombre' => 'required',
            'duracion' => 'required',
        ]);
        $materia->docentes()->attach($docenteId);
        $grupo->docentes()->attach($materia);
        return redirect()->route('materias.index')
                ->with('status', 'Materia creado correctamente.');
    }

    public function edit(Materia $materia){
        return view('materias.edit', ['materia' => $materia]);
    }

    public function update(Request $request, Materia $materia){
        // indicar que el parametro recivido es de tipo Docente
        // nos ayuda a omitir la busqueda del Docente con el metodo find(id)
        $materia->update();
        // // to_route() -> es como redirect()->route()
        return to_route('docentes.show', $materia)
        ->with('status', 'Docente actualizado correctamente');
    }

    public function destroy(Materia $materia){
        $materia->delete();
        return to_route('materias.index')->with('status', 'Materia eliminado correctamente');
    }

}
