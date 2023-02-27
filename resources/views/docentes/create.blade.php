<x-layouts.app 
  title="Agregar nuevo docente"
>
<!-- variable de errores $errors  -->
  <h1>Agregar nuevo docente</h1>

  <form action="{{route('docentes.store')}}"  method="POST">
    @csrf
    @include('docentes.form-fields')

  </form>


  <a href="{{route('docentes.index')}}">Regresar</a>

  
</x-layouts.app>