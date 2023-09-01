<x-layouts.app :title="$alumno->nombre">
    <main class="">
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
                    <p class="font-normal">Direccion: <span class="font-semibold">{{ $alumno->direccion }}</span>
                    </p>
                    <p class="font-normal">Correo electronico: <span
                            class="font-semibold">{{ $alumno->email }}</span></p>
                    <p class="font-normal">Telefono: <span class="font-semibold">{{ $alumno->telefono }}</span>
                    </p>
                </div>
            </div>
        </div>
    </main>
</x-layouts.app>
