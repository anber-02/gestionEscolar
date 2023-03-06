<form action="{{ route('alumnos.index') }}" method="GET" id="form-buscar">
    {{-- <div>
        <label for="">Buscar</label>
        <input type="text" name="buscar" id="buscar" value="{{ $buscar }}" />
    </div>
    <h1>Filtros</h1> --}}
    <div class="text-center">
        <h2 class="text-xl font-semibold">Grupo:</h2>
        <select name="grupo-filter" id="grupo-filter">
            <option value="">Seleccione un grupo</option>
            <option value="todos">Todos</option>
            @foreach ($grupos as $grupo)
                <option 
                value="{{ $grupo->nombre }}" 
                @if ($grupof == $grupo->nombre) {{ 'selected' }} @endif
                >
                    {{ $grupo->nombre }}
                </option>
            @endforeach
        </select>
    </div>
</form>

<script>
    const idFormulario = document.getElementById('form-buscar')
    const idSelect = document.getElementById('grupo-filter')
    idSelect.addEventListener('change', () => {
        idFormulario.submit();
    })
</script>
