<x-layouts.app title="Alumnos">
    <div class="w-full mt-4">
        <div class="flex gap-2 items-center">
            <h1 class="text-lg font-bold text-left">Lista de alumnos</h1>
            <x-button text="Agregar alumno" route="alumnos.create" />
        </div>
        <div class=" flex flex-col min-w-full items-start">
            <div class="w-full  px-1 py-2 min-w-full inline-block rounded-sm" >
                <x-buscador.buscador :grupos="$grupos" buscar="grupo" :grupof="$grupo_filter">
                </x-buscador.buscador>
            </div>
        </div>



        {{-- Tabla alumnos --}}

        <div class="pb-8 pt-2  w-full">
            <div class="shadow-3xl overflow-auto rounded border border-gray-800">
                <table class="max-w-full bg-white">
                    <thead class=" text-black">
                        <tr class="border-b border-black">
                            <th class="border-r border-black text-center py-3 px-4  capitalize font-bold text-base">
                                Matricula</th>
                            <th class="border-r border-black text-center py-3 px-4  capitalize font-bold text-base">
                                Alumnos</th>
                            <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">
                                Grupo</th>
                            <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">
                                Telefono</th>
                            <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">
                                Correo</td>
                            <th class="border-black text-center py-3 px-4 capitalize font-bold text-base">Opciones</td>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">

                        @foreach ($alumnos as $alumno)
                            <tr class="bg-white border-b border-black">
                                <td class="border-r border-black text-left uppercase py-3 px-4" >{{ $alumno->matricula }}</td>
                                <td class=" border-r border-black text-left capitalize py-3 px-4">
                                    {{ $alumno->a_paterno }}
                                    {{ $alumno->a_materno }}
                                    {{ $alumno->nombre }}
                                </td>
                                <td class=" border-r border-black text-left py-3 px-4">
                                    {{ $alumno->grupo }}
                                </td>
                                <td class=" border-r border-black text-left py-3 px-4">
                                    <a class="hover:text-blue-500" href="tel:622322662">{{ $alumno->telefono }}</a>
                                </td>
                                <td class=" border-r border-black text-left py-3 px-4">
                                    <a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">{{ $alumno->email }}</a>
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
    </div>
</x-layouts.app>
