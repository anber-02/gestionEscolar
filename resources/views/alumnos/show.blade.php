<x-layouts.app :title="$alumno->nombre">
    <main class="md:px-32 flex flex-col items-center">
      <form action={{ route('alumnos.destroy', $alumno) }} method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"
            class=" text-red-600 hover:bg-gray-300 hover:text-black py-1 px-3 rounded">Eliminar</button>
    </form>
        <h1 class="text-3xl font-bold text-center">Informacion del estudiante</h1>
        <div class="flex justify-around mb-5 w-full">
          <p class="uppercase  font-bold">Matricula: <span class="font-semibold">{{ $alumno->matricula }}</span></p>

          <p class="uppercase  font-bold">Grado: <span class="font-semibold">{{ $alumno->grado }}</span></p>
        </div>
        <div class="w-full flex justify-around gap-10">
            <div>
                <h2 class="text-lg font-semibold">Datos del estudiante:</h2>
                <div>
                    <p>Nombre(s):
                        <span>{{ $alumno->nombre }}</span>
                    </p>
                </div>
                <p>Apellido paterno: <span>{{ $alumno->a_paterno }}</span></p>
                <p>Apellido materno: <span>{{ $alumno->a_materno }}</span></p>
                <p>Matricula: <span>{{ $alumno->matricula }}</span></p>
                <p>Edad: <span>{{ $alumno->edad }}</span></p>
                <p>Direccion: <span>{{ $alumno->direccion_alumno }}</span></p>
                <p>Correo electronico: <span>{{ $alumno->email_alumno }}</span></p>
                <p>Telefono: <span>{{ $alumno->telefono_alumno }}</span></p>
                <p>Grado: <span>{{ $alumno->grado }}</span></p>
            </div>
            <div>
                <h2 class="text-lg font-semibold">Datos del tutor:</h2>
                <p>Nombre(s): <span>{{ $alumno->nombre_tutor }}</span></p>
                <p>Apellido paterno: <span>{{ $alumno->a_paterno_tutor }}</span></p>
                <p>Apellido materno: <span>{{ $alumno->a_materno_tutor }}</span></p>
                <p>Correo electronico: <span>{{ $alumno->email_tutor }}</span></p>
                <p>Telefono: <span>{{ $alumno->telefono_tutor }}</span></p>
                <p>Direccion: <span>{{ $alumno->direccion_tutor }}</span></p>
            </div>
        </div>
        <a class="bg-cyan-600 text-cyan-50 font-semibold w-36 hover:bg-cyan-300 hover:text-black py-1 px-3 rounded-lg text-center"
            href="{{ route('alumnos.edit', $alumno->id_alumno) }}">Editar
        </a>
    </main>
</x-layouts.app>
