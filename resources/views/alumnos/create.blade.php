<x-layouts.app 
  title="Agregar nuevo alumno"
>
<!-- variable de errores $errors  -->
  <h1>Agregar nuevo alumno</h1>

  <form action="{{route('alumnos.store')}}"  method="POST">
    @csrf
    @include('alumnos.form-fields')

  </form>


  <a href="{{route('alumnos.index')}}">Regresar</a>

  
</x-layouts.app>


<!-- 'nombre' => 'required',
		'a_paterno' => 'required',
		'a_materno' => 'required',
		'matricula' => 'required',
		'edad' => 'required',
		'direccion_alumno' => 'required',
		'email_alumno' => 'required',
		'telefono_alumno' => 'required',
		'grado' => 'required',
		'nombre_tutor' => 'required',
		'a_paterno_tutor' => 'required',
		'a_materno_tutor' => 'required',
		'email_tutor' => 'required',
		'telefono_tutor' => 'required',
		'direccion_tutor' => 'required', -->