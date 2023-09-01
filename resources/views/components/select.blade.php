<div class="">
    <p class="block mb-2 text-xs font-medium text-black md:text-base">Filtros</p>
    <select name="grupo-filter" id="grupo-filter"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="" class="text-gray-400">Seleccione un grupo</option>
        <option value="todos">Todos</option>
        @foreach ($grupos as $grupo)
            <option class="uppercase" value="{{ $grupo->id_grupo }}"
                @if ($grupof == $grupo->nombre || $grupof == $grupo->id_grupo) {{ 'selected' }} @endif>
                {{ $grupo->nombre }}
            </option>
        @endforeach
    </select>
</div>
