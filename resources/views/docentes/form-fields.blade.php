
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
          value="{{ old('nombre', $docente->nombre) }}"
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
          value="{{ old('a_paterno', $docente->a_paterno) }}"
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
          value="{{ old('a_materno', $docente->a_materno) }}"
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
            for="num_tel" 
            class="font-semibold ">
            Telefono:
        </label>
        <input
            id="num_tel"
            placeholder="951 203 12 20"
            class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
            type="text"
            name="num_tel" 
            value="{{ old('num_tel', $docente->num_tel) }}"
        />
        <!-- indicamos la variable que queremos verificar si tiene errores -->
        @error('num_tel')
            <!-- variable mensaje disponible por laravel -->
            <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
        @enderror
    </div>

  <div class="flex flex-col">
      <label 
          for="rfc" 
          class="font-semibold ">
          RFC
      </label>
      <input
          id="rfc"
          placeholder="r210a"
          class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
          type="text"
          name="rfc" 
          value="{{ old('rfc', $docente->rfc) }}"
      />
      <!-- indicamos la variable que queremos verificar si tiene errores -->
      @error('rfc')
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
          value="{{ old('email', $docente->email) }}"
      />
      <!-- indicamos la variable que queremos verificar si tiene errores -->
      @error('email')
          <!-- variable mensaje disponible por laravel -->
          <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
      @enderror
  </div>
  <div class="flex flex-col">
      <label 
          for="password" 
          class="font-semibold ">
          Contraseña:
      </label>
      <input
          id="password"
          placeholder="******"
          class="py-2 px-3 text-sm leading-tight text-gray-700 border-2 rounded shadow-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-400"
          type="password"
          name="password" 
          {{-- value="{{ old('password', $docente->) }}" --}}
      />
      <!-- indicamos la variable que queremos verificar si tiene errores -->
      @error('telefono')
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
