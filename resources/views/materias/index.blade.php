<x-layouts.app title="Docentes">
  <a href="{{ route('materias.create') }}">Agregar nueva Materia</a>

  <h1 class="text-3xl font-bold text-center">Lista de Materias</h1>
  <div class="md:px-32 flex min-w-full justify-around">
    <div>
        <h2 class="text-2xl font-semibold">Administrador:</h2>
        <p class="capitalize">
            {{ auth()->user()->a_paterno }}
            {{ auth()->user()->a_materno }}
            {{ auth()->user()->nombre }}
        </p>
    </div>
    <div>
        <h2 class="text-2xl font-semibold">Tabla:</h2>
        <p>Materias</p>
    </div>
</div>


  <div class="px-3  md:px-24 py-8 w-full">
    <div class="shadow-3xl overflow-auto rounded-lg border border-gray-800">
        <table class="min-w-full bg-white">
            <thead class=" text-black">
                <tr class="border-b border-black">
                    <th class="w-auto border-r border-black text-center py-3 px-4  capitalize font-bold text-base">Materia</th>
                    <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">Duracion</th>
                    <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">Docentes</th>
                    <th class="border-r border-black text-center py-3 px-4 capitalize font-bold text-base">Grupos</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">

                @foreach ($materias as $materia)
                    <tr class="bg-white border-b border-black capitalize">
                        <td class=" border-r border-black text-left py-3 px-4">
                            {{$materia->nombre}}
                        </td>
                        <td class=" border-r border-black text-left py-3 px-4">
                            {{$materia->duracion}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</x-layouts.app>
