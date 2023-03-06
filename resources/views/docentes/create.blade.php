<x-layouts.app 
  title="Agregar nuevo docente"
>
<!-- variable de errores $errors  -->
<div class="w-10/12 lg:w-1-43 m-auto bg-white rounded-lg shadow-md  py-8 ">
  <h1 class="text-center font-bold text-2xl mb-8 text-gray-600">Agregar nuevo docente</h1>
    <form class="w-full m-auto bg-white rounded-md px-3" action="{{route('docentes.store')}}"  method="POST">
      @csrf
      @include('docentes.form-fields')
  
    </form>
  </div>


  <a href="{{route('docentes.index')}}">Regresar</a>

  
</x-layouts.app>