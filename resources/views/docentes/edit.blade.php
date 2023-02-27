<x-layouts.app 
 :title="$docente->nombre"
 >
  <h1>Edit form</h1>
  <form action="{{route('docentes.update', $docente)}}"  method="POST">
    @csrf @method('PATCH')
    @include('docentes.form-fields')
  </form>

  <a href="{{route('docentes.index')}}">Regresar</a>
</x-layouts.app>