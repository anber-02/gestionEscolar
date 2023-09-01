<nav class="bg-gray-600 px-2 sm:px-4 py-2.5 dark:bg-gray-900 relative ">
    <div class="flex flex-wrap items-center justify-between mx-auto max-w-7xl ">
        <div class="flex gap-2 items-center">
            <button id="btn-menu" class="text-white cursor-pointer hover:bg-teal-700 rounded-md lg:hidden" >
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 1024 1024"><path fill="currentColor" d="M160 448a32 32 0 0 1-32-32V160.064a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V416a32 32 0 0 1-32 32H160zm448 0a32 32 0 0 1-32-32V160.064a32 32 0 0 1 32-32h255.936a32 32 0 0 1 32 32V416a32 32 0 0 1-32 32H608zM160 896a32 32 0 0 1-32-32V608a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32v256a32 32 0 0 1-32 32H160zm448 0a32 32 0 0 1-32-32V608a32 32 0 0 1 32-32h255.936a32 32 0 0 1 32 32v256a32 32 0 0 1-32 32H608z"/></svg>
            </button>
            <a href="{{ route('alumnos.index') }}" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white dark:text-white lg:text-2xl">Gestor
                    Universitario</span>
            </a>
        </div>
        <div class="hidden w-full  absolute z-50 top-12 left-0 bg-gray-900 lg:relative lg:block lg:w-auto lg:top-0" id="menu">
            <ul
                class="flex flex-col p-4 mt-4  bg-gray-900 max-w-7xl w-full m-auto lg:flex-row lg:p-0 lg:m-0">
                @if(auth()->user()->rol == 'admin')
                <li>
                    <x-nav-link route="alumnos.index" text="alumnos" />
                </li>
                <li>
                    <x-nav-link route="docentes.index" text="docentes" />
                    
                </li>
                <li>
                    <x-nav-link route="materias.index" text="materias" />
                </li>
                <li>
                    <x-nav-link route="carreras.index" text="carreras" />
                </li>
                @endif
                <li>
                    <x-nav-link route="calificaciones.index" text="calificaciones" />
                </li>
                <hr class="sm:hidden"/>
                <li class="sm:hidden">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button
                        type="submit"
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-indigo-200 text-xs bg-indigo-100 hover:bg-indigo-200 rounded-md mt-6 font-medium py-2 w-full leading-3 text-indigo-700">Salir</button>
                    </form>
                </li>
            </ul>
        </div>
        {{-- Avatar --}}
        <div class="relative hidden sm:block">
            <div class="z-50 px-4 py-1 shadow rounded text-sm font-medium leading-none text-gray-700 flex items-center justify-between cursor-pointer"
                onclick="dropdownHandler()">
                <span class="text-white capitalize">{{Auth::user()->nombre}}</span>
                <div class="ml-1">
                    <div class="hidden" id="close">
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00016 0.666664L9.66683 5.33333L0.333496 5.33333L5.00016 0.666664Z"
                                fill="#fff" />
                        </svg>
                    </div>
                    <div id="open">
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00016 5.33333L0.333496 0.666664H9.66683L5.00016 5.33333Z" fill="#fff" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-64 right-1 mt-2 p-4 bg-gray-800 text-white shadow rounded-md fixed hidden z-50" id="dropdown">
                @if(auth()->user()->rol == 'admin')
                <p>Admin</p>
                @else
                <p>Docente</p>
                @endif
                <span>{{Auth::user()->email}}</span>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button
                    type="submit"
                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-indigo-200 text-xs bg-indigo-100 hover:bg-indigo-200 rounded-md mt-6 font-medium py-2 w-full leading-3 text-indigo-700">Salir</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<script>
    const $ = (e) => document.querySelector(`${e}`)
    const $$ = (e) => document.querySelectorAll(`${e}`)
    
    const btnMenu = $('#btn-menu')
    btnMenu.addEventListener('click', (e) => {
        const menu = $('#menu')
        menu.classList.toggle('hidden')
    })

    document.addEventListener('click', function(event) {
    let isClickInside = menu.contains(event.target) || btnMenu.contains(event.target);
    if (!isClickInside) {
        menu.classList.add('hidden')
    }
});

    let dropdown = document.getElementById("dropdown");
    let open1 = document.getElementById("open");
    let close1 = document.getElementById("close");

    let flag = false;
    const dropdownHandler = () => {
        if (!flag) {
            dropdown.classList.add("hidden");
            open1.classList.add("hidden");
            close1.classList.remove("hidden");
            flag = true;
        } else {
            dropdown.classList.remove("hidden");
            close1.classList.add("hidden");
            open1.classList.remove("hidden");
            flag = false;
        }
    };
</script>
