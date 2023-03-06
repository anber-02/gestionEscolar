<div
    class="w-full sm:block min-[320px]:px-4 md:flex flex-wrap md:justify-between justify-evenly lg:block lg:px-4 lg:gap-4">
    <div class="flex flex-col ">
        <label for="nombre" class="font-semibold ">
            Nombre:
        </label>
        <input id="nombre" placeholder="Nombre"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="text" name="nombre" value="{{ old('nombre', $materia->nombre) }}" />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('nombre')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="duracion" class="font-semibold ">
            Duracion:
        </label>
        <input id="duracion" placeholder="Apellido paterno"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="text" name="duracion" value="{{ old('duracion', $materia->duracion) }}" />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('duracion')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
</div>

<h2 class="px-4 mt-5 font-bold text-lg capitalize">Asignar grupo y Docente</h2>

<div class="w-full flex flex-wrap px-4 py-2 justify-between">
    <div class="flex flex-col">
        <label for="grupo_id" class="font-semibold ">
            Grupo:
        </label>

        <select name="grupo_id"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400 cursor-pointer capitalize">
            <option value="" class="text-gray-400">Selecciona el grupo</option>
            @foreach ($grupos as $grupo)
                <option value="{{ $grupo->id_grupo }}" @if (old('grupo_id') == $grupo->id_grupo) {{ 'selected' }} @endif>
                    {{ $grupo->nombre }}
                </option>
            @endforeach
        </select>
        @error('grupo_id')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
    {{-- ASDASDas --}}
    <div class="flex flex-col">
        <label for="docente" class="font-semibold ">
            Docente:
        </label>

        <select name="docente_id"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400 cursor-pointer capitalize">
            <option value="" class="text-gray-400">Selecciona el docente</option>
            @dump($docentes)
            @foreach ($docentes as $docente)
                <option value="{{ $docente->id }}" @if (old('docente_id') == $docente->id) {{ 'selected' }} @endif>
                    {{ $docente->a_paterno }} {{ $docente->a_materno }} {{ $docente->nombre }}
                </option>
            @endforeach
        </select>
        @error('docente_id')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
</div>



<input type="submit" value="Enviar"
    class="ml-4 mt-3 py-2 px-4 rounded-md bg-blue-400 text-white font-bold tracking-wider hover:bg-blue-300 hover:text-gray-200 cursor-pointer" />
