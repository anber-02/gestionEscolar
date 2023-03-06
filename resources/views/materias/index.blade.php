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

                        <td class=" border-r border-black text-left py-3 px-4">
                            <ul class="list-disc px-2">
                                @foreach ( $materia->docentes as $docente )
                                <li>{{$docente->a_paterno}} {{$docente->a_materno}} {{$docente->nombre}}</li>
                                @endforeach
                            </ul>
                            @if($materia->docentes->toArray() == []) 
                            <p class="text-red-700">Sin docente asignado</p>
                            @endif
                        </td>
                        <td class=" border-r border-black text-left py-3 px-4">
                            <ul class="px-2">
                                @foreach ( $materia->grupos as $grupo )
                                <li>{{$grupo->nombre}}</li>
                                @endforeach
                            </ul>
                            @if($materia->grupos->toArray() == []) 
                            <p class="text-red-700">Sin grupo asignado</p>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
  {{-- Tabla Materia --}}



  {{-- gracias a la directiva 
  @auth 
    //todo esto solo se mostrara a usuarios autenticados
  @endauth 
  
  @guest
   //todo esto solo se mostrara a usuarios no autenticados
  @endguest
  --}}

</x-layouts.app>
