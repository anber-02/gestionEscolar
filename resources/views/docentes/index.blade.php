<x-layouts.app title="Docentes">
    <a href="{{ route('docentes.create') }}">Agregar un docente</a>

    <h1 class="text-3xl font-bold text-center">Lista de Docentes</h1>
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
            <p>Docentes</p>
        </div>
    </div>



    {{-- Tabla docentes --}}

    <div class="px-3  md:px-28 py-8 w-full">
        <div class="shadow-3xl overflow-auto rounded-lg border border-gray-800">
            <table class="min-w-full bg-white">
                <thead class=" text-black">
                    <tr class="border-b border-black">
                        <th class="w-auto border-r border-black text-center py-3 px-4  capitalize font-bold text-base">Docentes</th>
                        <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">Telefono</th>
                        <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">Correo electronico</td>
                        <th class="border-black text-center py-3 px-4 capitalize font-bold text-base">Opciones</td>
                    </tr>
                </thead>
                <tbody class="text-gray-700">

                    @foreach ($docentes as $docente)
                        <tr class="bg-white border-b border-black">
                            <td class="w-auto border-r border-black text-left capitalize py-3 px-4">
                                {{ $docente->a_paterno }} 
                                {{ $docente->a_materno }} 
                                {{ $docente->nombre }}
                            </td>
                            <td class=" border-r border-black text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="tel:622322662">{{ $docente->num_tel }}</a>
                            </td>
                            <td class=" border-r border-black text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">{{ $docente->email }}</a>
                            </td>
                            <td class="text-left py-3 px-4 flex justify-center">
                                <a class="text-cyan-300 hover:bg-gray-300 hover:text-black py-1 px-3 rounded"
                                    href="{{ route('docentes.show', $docente->id) }}">Ver
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

    {{-- gracias a la directiva 
    @auth 
      //todo esto solo se mostrara a usuarios autenticados
    @endauth 
    
    @guest
     //todo esto solo se mostrara a usuarios no autenticados
    @endguest
    --}}

</x-layouts.app>
