<x-layouts.app title="Agregar nuevo alumno">
    <a href="{{ route('alumnos.index') }}">Regresar</a>
        <div class="max-w-7xl">
            <h1 class="text-center font-bold text-2xl mb-2 text-gray-600">Agregar alumno</h1>
            <form action="{{ route('alumnos.store') }}" method="POST" class="w-full m-auto rounded-md px-3  pb-3">
                @csrf
                @include('alumnos.form-fields')
            </form>
        </div>
</x-layouts.app>
