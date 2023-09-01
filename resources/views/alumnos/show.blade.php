<x-layouts.app :title="$alumno->nombre">
    <main class="w-full">
        <section class="mt-4 mb-10 grid gap-2">
            <h1 class="text-xl sm:text-3xl font-bold  capitalize">{{ $alumno->a_paterno }} {{ $alumno->a_materno }}
                {{ $alumno->nombre }}</h1>
            <p class="text-base font-bold sm:text-lg">Matricula: <span class="font-semibold uppercase">{{ $alumno->matricula }}</span>
            </p>
        </section>

        <div class="flex flex-col gap-6">
            <div class="w-full pb-2 rounded-sm">
                <div class="flex justify-between bg-slate-300 rounded-sm px-1 sm:py-1">
                    <h3 class="text-base font-semibold sm:text-lg">Datos personales</h3>
                    <button id="datos__personales">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3" />
                            </g>
                        </svg>
                    </button>
                </div>
                <x-divider class="h-[1px] my-1" />
                <div class="px-1 text-sm grid gap-1 sm:text-base sm:py-2 sm:gap-2">
                    <p class="font-normal">Direccion: <span class="font-semibold">{{ $alumno->direccion }}</span>
                    </p>
                    <p class="font-normal">Correo electronico: <span
                            class="font-semibold">{{ $alumno->email }}</span></p>
                    <p class="font-normal">Telefono: <span class="font-semibold">{{ $alumno->telefono }}</span>
                    </p>
                </div>
            </div>

            <div class="w-full pb-2 rounded-sm">
                <div class="flex justify-between bg-slate-300 rounded-sm px-1 sm:py-1">
                    <h3 class="text-base font-semibold sm:text-lg">Datos escolares</h3>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3" />
                            </g>
                        </svg>
                    </button>
                </div>
                <x-divider class="h-[1px] my-1" />
                <div class="px-1 text-sm grid gap-1 sm:text-base sm:py-2 sm:gap-2">
                    <p class="font-normal">Carrera: <span class="font-semibold">{{ $alumno->direccion }}</span>
                    </p>
                    <p class="font-normal">Grupo: <span
                            class="font-semibold">{{ $alumno->email }}</span></p>
                    <p class="font-normal">Matricula: <span class="font-semibold">{{ $alumno->telefono }}</span>
                    </p>
                </div>
            </div>

            <div class="w-full pb-2 rounded-sm">
                <div class="flex justify-between bg-red-400 rounded-sm px-1 sm:py-1">
                    <h3 class="text-base font-semibold sm:text-lg text-red-50">Zona peligrosa</h3>
                </div>
                <x-divider class="h-[1px] my-1" />
                <div class="px-2">
                    <small class="inline-block w-full text-blue-600 bg-blue-100 py-1 px-2 mb-2" >Al eliminar el alumno no prodra recurperarlo</small>
                    <div class="flex  justify-between gap-2" >
                        <p class="font-semibold ">Eliminar Alumno</p>
                        <button class="bg-red-400 rounded-md text-white font-semibold px-2 py-1 hover:bg-red-600">
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="content__modal" class="hidden fixed bottom-0 top-0 right-0 left-0 bg-[#00000080] z-50 flex items-center justify-center">
        <div class="m-auto  w-[50%] h-[80%] bg-white rounded-md py-4 px-3 overflow-auto">
            
        </div>
    </div>
    <script>
        const modal = $('#content__modal')
        const btnDatos = $('#datos__personales')
        btnDatos.addEventListener('click', () => {
            $('#content__modal>div').innerHTML = `@include('alumnos.edit', ['alumno'])`
            modal.classList.remove('hidden')
        })
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden')
            }
        })
    </script>
</x-layouts.app>
