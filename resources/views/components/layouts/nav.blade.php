{{-- devuelve un booleano si estamos en la ruta indicada 
    o alumnos.* todo lo que siga despues de alumnos.--}}
{{-- {{request()->routeIs('alumnos.index') ? "text-white  md:text-blue-700" : "text-gray-500"}} --}}
<nav class="bg-black border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto w-10/12">
        <a href="{{ route('alumnos.index') }}" class="flex items-center">
            <img src="/img/UTblanco.png" class="h-6 mr-3 sm:h-9" alt="UT logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap text-white dark:text-white">Gestor
                Universitario</span>
        </a>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-black dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('alumnos.index') }}"
                        class="text-lg block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0 dark:text-white {{request()->routeIs('alumnos.*') ? "text-white  md:text-blue-700" : "text-gray-500"}}"
                        aria-current="page">Alumnos</a>
                </li>
                <li>
                    <a href="{{route('docentes.index')}}"
                        class="text-lg block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent {{request()->routeIs('docentes.*') ? "text-white  md:text-blue-700" : "text-gray-500"}}">Docentes</a>
                </li>
            </ul>
        </div>
        {{-- Avatar --}}
        <div>
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
            <div class=" w-auto px-4 py-1 shadow rounded text-sm font-medium leading-none text-gray-800 flex items-center justify-between cursor-pointer"
                onclick="dropdownHandler()">
                <img class="w-10 h-10 rounded-full object-cover mr-2" src="/img/perfil.png" alt="Rounded avatar">
                <span class="text-white">{{Auth::user()->name}}</span>
                <div class="ml-1">
                    <div class="hidden" id="close">
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00016 0.666664L9.66683 5.33333L0.333496 5.33333L5.00016 0.666664Z"
                                fill="#1F2937" />
                        </svg>
                    </div>
                    <div id="open">
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00016 5.33333L0.333496 0.666664H9.66683L5.00016 5.33333Z" fill="#1F2937" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-64 mt-2 p-4 bg-gray-800 text-white shadow rounded fixed hidden" id="dropdown">
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
