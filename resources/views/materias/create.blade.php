<x-layouts.app title="Materias">
<div class="w-8/12 lg:w-1/3 m-auto bg-white rounded-lg shadow-md  py-8 ">
  <h1 class="text-center font-bold text-2xl mb-8 text-gray-600">Agregar nueva materia</h1>
  <form action="{{ route('materias.store') }}" method="POST" class="w-full m-auto bg-white rounded-md px-3">
      @csrf
      @include('materias.form-fields')
  </form>
</div>
</x-layouts.app>