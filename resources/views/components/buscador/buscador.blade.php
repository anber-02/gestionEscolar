<form action="{{ route('alumnos.index') }}" method="GET" id="form-buscar" class="mb-4">
    <div class="flex flex-col flex-wrap gap-2 sm:flex-row sm:w-full w-full">
        <x-input type="text" text="Buscar" name="buscar" id="buscar" placeholder="Buscar por matricula" />
       <x-select :grupos="$grupos" :grupof="$grupof" />
        <input type="submit" value="Buscar"
            class="inline-block w-full sm:w-auto self-end bg-teal-700 text-white px-2 py-1 rounded-md text-center cursor-pointer hover:bg-teal-500 md:p-2.5" />
    </div>
</form>
