        <h1 class="text-center font-bold text-2xl mb-8 text-gray-600">Editar</h1>
        <form action="{{ route('alumnos.update', $alumno) }}" method="POST"
            class="w-full m-auto bg-white rounded-md px-3">
            @csrf @method('PATCH')
            @include('alumnos.form-fields')
        </form>
