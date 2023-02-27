<x-layouts.app title="Docentes">
  <a href="{{ route('docentes.create') }}">Agregar un docente</a>

  <h1 class="text-3xl font-bold text-center">Lista de Docentes</h1>
  <div class="md:px-32 flex min-w-full justify-around">
      <div>
          <h2 class="text-lg font-semibold">Administrador:</h2>
          <p>Miranda Ruiz</p>
      </div>
      <div>
          <h2 class="text-lg font-semibold">Tabla:</h2>
          <p>Docentes</p>
      </div>
  </div>



  {{-- Tabla docentes --}}

  <div class="px-3  md:px-32 py-8 w-full">
      <div class="shadow overflow-auto rounded border-b border-gray-200">
          <table class="min-w-full bg-white">
              <thead class="bg-gray-800 text-white">
                  <tr>
                      <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                      <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Apellido paterno</th>
                      <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Apellido materno</th>
                      <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Telefono</th>
                      <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Correo electronico</td>
                      <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Opciones</td>
                  </tr>
              </thead>
              <tbody class="text-gray-700">

                  @foreach ($docentes as $docente)
                      <tr class="bg-gray-100">
                          <td class="w-1/5 text-left py-3 px-4">{{ $docente->nombre }}</td>
                          <td class="w-1/5 text-left py-3 px-4">{{ $docente->a_paterno }}</td>
                          <td class="w-1/5 text-left py-3 px-4">{{ $docente->a_materno }}</td>
                          <td class="text-left py-3 px-4">
                              <a class="hover:text-blue-500" href="tel:622322662">{{ $docente->telefono}}</a>
                          </td>
                          <td class="text-left py-3 px-4">
                              <a class="hover:text-blue-500"
                                  href="mailto:jonsmith@mail.com">{{ $docente->email }}</a>
                          </td>
                          <td class="text-left py-3 px-4 flex justify-center">
                              <a class="text-cyan-300 hover:bg-gray-300 hover:text-black py-1 px-3 rounded"
                                  href="{{ route('docentes.show', $docente->id_docente) }}">Ver
                              </a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>

{{-- gracias a la directiva 
    @auth 
      //todo esto solo se mostrara a usuarios autenticados
    @endauth 
    
    @guest
     //todo esto solo se mostrara a usuarios no autenticados
    @endguest
    --}}

</x-layouts.app>
