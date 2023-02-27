<x-layouts.app 
 :title="$alumno->nombre"
 >
  <h1>Edit form</h1>
  <form action="{{route('alumnos.update', $alumno)}}"  method="POST">
    @csrf @method('PATCH')
    @include('alumnos.form-fields')
  </form>

  <a href="{{route('alumnos.index')}}">Regresar</a>
</x-layouts.app>