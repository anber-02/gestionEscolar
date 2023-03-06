<x-layouts.app title="Alumnos">

    <a href="{{ route('alumnos.create') }}">Agregar un alumno</a>

    <h1 class="text-3xl font-bold text-center">Lista de alumnos</h1>
    <div class="md:px-32 flex min-w-full justify-around">
        <div>
            <h2 class="text-2xl font-semibold">Administrador:</h2>
            <p class="capitalize">
                {{ auth()->user()->a_paterno }}
                {{ auth()->user()->a_materno }}
                {{ auth()->user()->nombre }}
            </p>
        </div>
        <div>
            <h2 class="text-2xl font-semibold">Tabla:</h2>
            <p>Alumnos</p>
        </div>
        <div>
            <x-buscador.buscador :grupos="$grupos" buscar="grupo" :grupof="$grupo_filter">
            </x-buscador.buscador>

        </div>
    </div>



    {{-- Tabla alumnos --}}

    <div class="px-3  md:px-28 py-8 w-full">
        <div class="shadow-3xl overflow-auto rounded border border-gray-800">
            <table class="min-w-full bg-white">
                <thead class=" text-black">
                    <tr class="border-b border-black">
                        <th class="border-r border-black text-center py-3 px-4  capitalize font-bold text-base">Alumnos</th>
                        <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">Telefono</th>
                        <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">Correo electronico</td>
                        <th class="border-black text-center py-3 px-4 capitalize font-bold text-base">Opciones</td>
                    </tr>
                </thead>
                <tbody class="text-gray-700">

                    @foreach ($alumnos as $alumno)
                        <tr class="bg-white border-b border-black">
                            <td class=" border-r border-black text-left capitalize py-3 px-4">
                                {{ $alumno->a_paterno }} 
                                {{ $alumno->a_materno }} 
                                {{ $alumno->nombre }}
                            </td>
                            <td class=" border-r border-black text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="tel:622322662">{{ $alumno->telefono }}</a>
                            </td>
                            <td class=" border-r border-black text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">{{ $alumno->email }}</a>
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
