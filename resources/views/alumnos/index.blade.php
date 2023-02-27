<x-layouts.app title="Alumnos">
    <a href="{{ route('alumnos.create') }}">Agregar un alumno</a>
    <a href="{{ route('alumnos.create') }}">grupos</a>

    <h1 class="text-3xl font-bold text-center">Lista de alumnos</h1>
    <div class="md:px-32 flex min-w-full justify-around">
        <div>
            <h2 class="text-lg font-semibold">Administrador:</h2>
            <p>Miranda Ruiz</p>
        </div>
        <div>
            <h2 class="text-lg font-semibold">Tabla:</h2>
            <p>Alumnos</p>
        </div>
        <div>
            <h2 class="text-lg font-semibold">Grupo:</h2>
            <p>T-502</p>
        </div>
    </div>



    {{-- Tabla alumnos --}}

    <div class="px-3  md:px-32 py-8 w-full">
        <div class="shadow overflow-auto rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                        <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Apellido paterno</th>
                        <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Apellido materno</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Telefono</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Correo electronico</td>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Opciones</td>
                    </tr>
                </thead>
                <tbody class="text-gray-700">

                    @foreach ($alumnos as $alumno)
                        <tr class="bg-gray-100">
                            <td class="w-1/5 text-left py-3 px-4">{{ $alumno->nombre }}</td>
                            <td class="w-1/5 text-left py-3 px-4">{{ $alumno->a_paterno }}</td>
                            <td class="w-1/5 text-left py-3 px-4">{{ $alumno->a_materno }}</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="tel:622322662">{{ $alumno->telefono_alumno }}</a>
                            </td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500"
                                    href="mailto:jonsmith@mail.com">{{ $alumno->email_alumno }}</a>
                            </td>
                            <td class="text-left py-3 px-4 flex justify-center">
                                <a class="text-cyan-300 hover:bg-gray-300 hover:text-black py-1 px-3 rounded"
                                    href="{{ route('alumnos.show', $alumno->id_alumno) }}">Ver
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</x-layouts.app>
