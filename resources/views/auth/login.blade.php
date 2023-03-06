<x-layouts.guest title="Login">

    <main class="bg-teal-200 align-center flex items-center justify-center min-h-screen">

        <div class="flex bg-white text-black py-2 px-2 rounded-md overflow-hidden shadow-md mr-10 lg:rounded-lg">
            <h1 class="font-bold px-2 text-3xl lg:text-5xl leading-10">------ Gestor <span
                    class="block ">Universitario<span></h1>
            <figure class="flex-none bg-black w-48 rounded-md">
                <img class="inset-0 w-full object-cover" src="/img/UTblanco.png" />
            </figure>
        </div>

        <form action="{{ route('login') }}" method="POST"
        class="flex flex-col bg-white shadow-x rounded-md px-8 pb-8 pt-6 mb-4 mx-2 lg:w-96 lg:h-96 z-10">
        @csrf
            <h2 class="text-teal-300 font-bold text-lg mb-3 lg:text-center lg:text-2xl">Buenos dias, <span
                    class="text-black">bienvenido.</span></h2>
            <div class="mb-4 border-b border-teal-500 py-2">
                <label class="block mb-1 font-semibold text-slate-900">
                    Correo Electronico
                </label>
                <input type="email" required="true" name="email" autofocus="autofocus" value="{{old('email')}}"
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 px-1 leading-tight focus:outline-none " />
                  </div>
                  @error('email')
                      <small class="font-bold text-red-500/80">{{ $message }}</small>
                  @enderror
            <div class="mb-4 border-b border-teal-500 py-2">
                <label class="block mb-1 font-semibold text-slate-900">
                    Contraseña
                </label>
                <input type="password" name="password" required="true"
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3  px-1 leading-tight focus:outline-none " />
                @error('password')
                    <small class="font-bold text-red-500/80">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center">
                <input
                    class="border rounded dark:bg-slate-900 dark:border-slate-800 border-slate-300 text-sky-700 focus:border-sky-300 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50"
                    name="remember" type="checkbox">
                <span class="cursor-pointer ml-2 font-serif text-slate-600 dark:text-slate-400">
                    Recuérdame
                </span>
            </div>
            {{-- <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none"
                href="{{ route('register') }}">
                Registrarse
            </a> --}}


            <input type="submit" value="Iniciar sesion"
                class="bg-teal-500 py-2 px-5 rounded-lg text-white font-semibold self-center  mt-8 cursor-pointer hover:bg-teal-300" />
        </form>
        <div class="w-full bg-gray-800 h-56 fixed bottom-0">
        </div>
    </main>
    </x-layouts.app>