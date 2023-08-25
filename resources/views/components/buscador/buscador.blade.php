<form action="{{ route('alumnos.index') }}" method="GET" id="form-buscar" class="w-full sm:flex sm:justify-between">
    <div>
        <label for="" class="pr-2 sm:block">Buscar</label>
        <input type="text" name="buscar" id="buscar" value="" placeholder="buscar por nombre,matricula" />
    </div>
    <div>
        <h2>Filtros</h2>
        <div class="flex items-center gap-2">
            <p class="text-base font-semibold">Grupo:</p>
            <select name="grupo-filter" id="grupo-filter">
                <option value="">Seleccione un grupo</option>
                <option value="todos">Todos</option>
                @foreach ($grupos as $grupo)
                    <option value="{{ $grupo->nombre }}" @if ($grupof == $grupo->nombre) {{ 'selected' }} @endif>
                        {{ $grupo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</form>

<script>
    const idFormulario = document.getElementById('form-buscar')
    const idSelect = document.getElementById('grupo-filter')
    idSelect.addEventListener('change', () => {
        idFormulario.submit();
    })
</script>
