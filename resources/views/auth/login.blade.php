<x-layouts.guest title="Login">

    <main
        class="bg-white sm:bg-teal-200 absolute top-0 bottom-0 right-0 left-0  gap-4 flex flex-col justify-center  items-center  sm:flex-row sm:relative sm:min-h-screen max-w-full px-4">

        <div class="min-w-full flex  bg-white text-black rounded-md overflow-hidden sm:min-w-0 lg:rounded-lg">
            <h1 class="font-bold text-2xl flex-1 leading-10 text-center py-2 px-4 sm:text-3xl">Gestor <span
                    class="text-teal-600 sm:block">Universitario<span>
            </h1>
            <hr />
            <figure class="bg-black w-48 rounded-md overflow-hidden hidden sm:block">
                <img class="w-full object-cover" src="/img/UTblanco.png" />
            </figure>
        </div>

        <form action="{{ route('login') }}" method="POST"
            class="flex flex-col bg-white shadow-lg rounded-md px-8 pb-8 pt-6 mb-4 lg:w-96 lg:h-96 z-10">
            @csrf
            <h2 class="text-teal-300 font-bold text-lg mb-3 lg:text-center lg:text-2xl">Iniciar sesion</h2>
            <div class="mb-4 border-b border-teal-500 py-2">
                <label class="block mb-1 font-semibold text-slate-900">
                    Correo Electronico
                </label>
                <input type="email" required="true" name="email" autofocus="autofocus" value="{{ old('email') }}"
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 px-1 leading-tight focus:outline-none " />
            </div>

            <div class="mb-4 border-b border-teal-500 py-2">
                <label class="block mb-1 font-semibold text-slate-900">
                    Contraseña
                </label>
                <input type="password" name="password" required="true"
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3  px-1 leading-tight focus:outline-none " />
            </div>
            {{-- ==========================  ERRORES DE INICIO DE SESION  ========== --}}
            @if (isset($errors) && count($errors) > 0)
                <div class="bg-red-300 pl-3 py-1 rounded-md">
                    @foreach ($errors->all() as $error)
                        <small class="font-bold text-red-800 block">{{ $error }}</small>
                    @endforeach
                </div>
            @endif
            {{-- ===================================== --}}
            <div class="flex items-center cursor-pointer">
                <input class="border rounded cursor-pointer" name="remember" type="checkbox">
                <span class=" ml-2 font-serif text-slate-600 dark:text-slate-400">
                    Recuérdame
                </span>
            </div>


            <input type="submit" value="Iniciar sesion"
                class="bg-teal-500 py-2 px-5 rounded-lg text-white font-semibold self-center  mt-8 cursor-pointer hover:bg-teal-300" />
        </form>
        <div class="w-full bg-gray-800 h-56 fixed bottom-0">
        </div>
    </main>
</x-layouts.app>
