<x-layouts.app :title="$alumno->nombre">
  <a href="{{ route('alumnos.index') }}">Regresar</a>
    <div class="w-10/12 lg:w-1-43 m-auto bg-white rounded-lg shadow-md  py-8 ">
        <h1 class="text-center font-bold text-2xl mb-8 text-gray-600">Agregar nuevo alumno</h1>
        <form action="{{ route('alumnos.update', $alumno) }}" method="POST"
            class="w-full m-auto bg-white rounded-md px-3">
            @csrf @method('PATCH')
            @include('alumnos.form-fields')
        </form>
    </div>
</x-layouts.app>
