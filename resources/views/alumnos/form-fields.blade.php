<div>
    <div class="w-full grid sm:grid-cols-3 gap-4 mb-4">
        <x-input type="text" id="nombre" name="nombre" placeholder="Nombre" text="Nombre(s)"
            value="{{ old('a_paterno', $alumno->nombre) }}" />
        <x-input type="text" id="a_paterno" name="a_paterno" placeholder="Apellido paterno" text="Apellido paterno"
            value="{{ old('a_paterno', $alumno->a_paterno) }}" />
        <x-input type="text" id="a_materno" name="a_materno" placeholder="Apellido materno" text="Apellido materno"
            value="{{ old('a_paterno', $alumno->a_materno) }}" />
    </div>


    <div class="w-full grid sm:grid-cols-3 gap-4 mb-4">
        <x-input type="email" id="email" name="email" placeholder="example@gmail.com" text="Correo electronico"
            value="{{ old('email', $alumno->email) }}" />
        <x-input type="text" id="telefono" name="telefono" placeholder="951 123 20 20" text="telefono"
            value="{{ old('telefono', $alumno->telefono) }}" />
    </div>

    <div class="w-full grid  gap-4 mb-4">
        <x-input type="text" id="direccion" name="direccion" placeholder="calle, colonia, estado" text="Direccion"
            value="{{ old('direccion', $alumno->direccion) }}" />
        <x-input type="text" id="matricula" name="matricula" placeholder="generar matricula" text="Matricula"
            value="{{ old('matricula', $alumno->matricula) }}" />
    </div>

    <input type="submit" value="{{$alumno->nombre ? 'Actualizar' : 'Enviar'}}"
        class="inline-block bg-teal-700 hover:bg-teal-500 rounded-md py-1.5 px-5 text-white cursor-pointer " />
</div>
