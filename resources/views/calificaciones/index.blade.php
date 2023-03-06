<x-layouts.app>
    <div class="md:px-32 mt-8 flex min-w-full justify-around">
        <div>
            @if (auth()->user()->email == 'admin1@gmail.com')
                <h2 class="text-lg font-semibold">Administrador:</h2>
                <span class="capitalize">
                    {{ auth()->user()->nombre }}
                    {{ auth()->user()->a_paterno }}
                    {{ auth()->user()->a_materno }}
                </span>
            @else
                <h2 class="text-lg font-semibold">Docente:</h2>
                <p>{{ auth()->user()->nombre }}</p>
            @endif()
        </div>

        <div>
            <h2 class="text-lg font-semibold">Materias:</h2>
            <div class="relative inline-block text-left">
                <div>
                    <button id="open_materias" type="button"
                        class="capitalize inline-flex w-full justify-center rounded-md border border-none bg-white  py-1 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-100 focus:bg-gray-100 "
                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                        {{ $alumnos[0]->materia }}
                        <svg class="-mr-1 ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!--
                  Dropdown menu, show/hide based on menu state.
              
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div id="content_materias"
                    class="capitalize hidden absolute right-0 z-10 mt-2 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none  "
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1 flex flex-col flex-wrap" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200"
                            role="menuitem" tabindex="-1" id="menu-item-0">Aplicaciones Iot</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200"
                            role="menuitem" tabindex="-1" id="menu-item-1">Base de datos</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200"
                            role="menuitem" tabindex="-1" id="menu-item-2">Aplicaciones Web</a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-lg font-semibold">Grupo:</h2>
            <div class="relative inline-block text-left">
                <div>
                    <button id="open_grupos" type="button"
                    class="inline-flex w-full justify-center rounded-md border border-none bg-white  py-1 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-100 focus:bg-gray-100 "
                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <p>T-502</p>
                        <svg class="-mr-1 ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!--
                  Dropdown menu, show/hide based on menu state.
              
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div id="content_grupos"
                    class="hidden absolute right-0 z-10 mt-2 w-24  origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none  "
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200"
                            role="menuitem" tabindex="-1" id="menu-item-0">T-501</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200"
                            role="menuitem" tabindex="-1" id="menu-item-1">T-202</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200"
                            role="menuitem" tabindex="-1" id="menu-item-2">DGS-801</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div>
        <div id="materias"></div>
        <div id="tabla_calificaciones">
            <div class="px-3  md:px-32 py-8 w-full">
                <div class="shadow overflow-auto rounded border-b border-gray-200">
                    <table class="min-w-full bg-white capitalize">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                                <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">1re. Parcial</th>
                                <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">2do. Parcial</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">3er. Parcial</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Promedio</td>
                                <th id="opciones_th" class="hidden text-left py-3 px-4 uppercase font-semibold text-sm">
                                    Opciones</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            @foreach ($alumnos as $alumno)
                                {{-- <form action=""  method="POST">
                                @csrf @method('PATCH') --}}
                                <tr class="bg-gray-50">
                                    <td class="w-1/3 text-left py-3  border-r-2 border-r-slate-300 px-4">
                                        {{ $alumno->a_paterno }}
                                        {{ $alumno->a_materno }}
                                        {{ $alumno->nombre }}
                                    </td>
                                    <td class="border-r-2 border-r-slate-300 w-1/6  py-3 px-4 text-center">
                                        <input value="{{ $alumno->primer_parcial }}" disabled class="w-full" />
                                    </td>
                                    <td class="border-r-2 border-r-slate-300 w-1/6 text-left py-3 px-4">{{ $alumno->segundo_parcial }}</td>
                                    <td class="border-r-2 border-r-slate-300 w-1/6 text-left py-3 px-4">{{ $alumno->tercer_parcial }}</td>
                                    <td class="border-r-2 border-r-slate-200 w-1/6 text-left py-3 px-4">{{ $alumno->promedio }}</td>
                                    <td id="opciones_td" class="hidden text-left py-3 px-4 flex">
                                        <a class="text-cyan-300 hover:bg-gray-300 hover:text-black py-1 px-3 rounded"
                                            href="{{ route('alumnos.show', $alumno->id_alumno) }}">Ver
                                        </a>
                                        <form action={{ route('alumnos.destroy', $alumno) }} method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class=" text-red-600 hover:bg-gray-300 hover:text-black py-1 px-3 rounded">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                {{-- </form> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <button class="bg-gray-200 font-bold rounded-lg py-2 px-5 w-28 shadow-lg" id="modo_edicion">Modo de edicion</button>
        </div>
    </div>

    <script>
        const opciones_td = document.getElementById('opciones_td');
        const opciones_th = document.getElementById('opciones_th');
        const modo_edicion = document.getElementById('modo_edicion');
        modo_edicion.addEventListener('click', () => {
            opciones_td.classList.toggle('hidden')
            opciones_th.classList.toggle('hidden')
            if (modo_edicion.innerHTML === 'Modo de edicion') {
                modo_edicion.innerHTML = "Guardar cambios"
            } else {
                modo_edicion.innerHTML = 'Modo de edicion'
            }
        })
        console.log({
            modo_edicion
        })



        let content_materias = document.getElementById("content_materias");
        let openButton = document.getElementById("open_materias");
        // let close1 = document.getElementById("closee");

        openButton.addEventListener('click', () => {
            content_materias.classList.toggle('hidden')
        })
        let content_grupos = document.getElementById("content_grupos");
        let openButton1 = document.getElementById("open_grupos");
        // let close1 = document.getElementById("closee");

        openButton1.addEventListener('click', () => {
            content_grupos.classList.toggle('hidden')
        })
    </script>

</x-layouts.app>
