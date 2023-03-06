
<div class="w-full sm:block min-[320px]:px-4 md:flex flex-wrap md:justify-between justify-evenly lg:justify-start lg:px-4 lg:gap-4">
    <div class="flex flex-col ">
        <label 
            for="nombre" 
            class="font-semibold ">
            Nombre(s):
        </label>
        <input
            id="nombre"
            placeholder="Nombre"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="text"
            name="nombre" 
            value="{{ old('nombre', $alumno->nombre) }}"
        />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('nombre')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
    <div class="flex flex-col">
        <label 
            for="a_paterno" 
            class="font-semibold ">
            Apellido paterno:
        </label>
        <input
            id="a_paterno"
            placeholder="Apellido paterno"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="text"
            name="a_paterno" 
            value="{{ old('a_paterno', $alumno->a_paterno) }}"
        />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('a_paterno')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
    <div class="flex flex-col">
        <label 
            for="a_materno" 
            class="font-semibold ">
            Apellido materno:
        </label>
        <input
            id="a_materno"
            placeholder="Apellido materno"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="text"
            name="a_materno" 
            value="{{ old('a_materno', $alumno->a_materno) }}"
        />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('a_materno')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="w-full flex flex-wrap px-4 py-2">
    <div class="flex flex-col mr-4">
        <label 
            for="email" 
            class="font-semibold ">
            Correo electronico:
        </label>
        <input
            id="email"
            placeholder="example@gmail.com"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="email"
            name="email" 
            value="{{ old('email', $alumno->email) }}"
        />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('email')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
    <div class="flex flex-col">
        <label 
            for="telefono" 
            class="font-semibold ">
            Telefono:
        </label>
        <input
            id="telefono"
            placeholder="951 201 20 30"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="text"
            name="telefono" 
            value="{{ old('telefono', $alumno->telefono) }}"
        />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('telefono')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="w-full px-4">
    <div class="flex flex-col ">
        <label 
            for="direccion" 
            class="font-semibold ">
            Direccion(s):
        </label>
        <input
            id="direccion"
            placeholder="direccion"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="text"
            name="direccion" 
            value="{{ old('direccion', $alumno->direccion) }}"
        />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('direccion')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
</div>


<div class="w-full flex flex-wrap px-4 py-2">
    <div class="flex flex-col mr-4">
        <label 
            for="matricula" 
            class="font-semibold ">
            Matricula
        </label>
        <input
            id="matricula"
            placeholder="example@gmail.com"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="text"
            name="matricula" 
            value="{{ old('matricula', $alumno->matricula) }}"
        />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('matricula')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>
    <div class="flex flex-col">
        <label 
            for="grupo_id" 
            class="font-semibold ">
            Grupo:
        </label>

        <select 
          name="grupo_id"
          class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400 cursor-pointer capitalize"
        >
            <option value="" class="text-gray-400">Selecciona el grupo</option>
            @foreach ($grupos as $grupo)
                <option 
                value="{{ $grupo->id_grupo }}"
                @if (old('grupo_id') == $grupo->id_grupo) {{ 'selected' }} @endif
                @if ($grupoAlumno == $grupo->nombre) {{ 'selected' }} @endif
                >
                    {{ $grupo->nombre }}
                </option>
            @endforeach
        </select>
    @error('grupo_id')
        <!-- variable mensaje disponible por laravel -->
        <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
    @enderror
    </div>
</div>


<input 
    type="submit" 
    value="Enviar"
    class="ml-4 mt-3 py-2 px-4 rounded-md bg-blue-400 text-white font-bold tracking-wider hover:bg-blue-300 hover:text-gray-200 cursor-pointer"
/>
