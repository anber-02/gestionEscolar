<x-layouts.app :title="$docente->nombre">
  <main class="md:px-32 flex flex-col items-center">
    <form action={{ route('docentes.destroy', $docente) }} method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"
          class=" text-red-600 hover:bg-gray-300 hover:text-black py-1 px-3 rounded">Eliminar</button>
  </form>
      <h1 class="text-3xl font-bold text-center">Informacion del docente</h1>
      <div class="w-full flex justify-around gap-10">
          <div>
              <h2 class="text-lg font-semibold">Datos del docente:</h2>
              <div>
                  <p>Nombre(s):
                      <span>{{ $docente->nombre }}</span>
                  </p>
              </div>
              <p>Apellido paterno: <span>{{ $docente->a_paterno }}</span></p>
              <p>Apellido materno: <span>{{ $docente->a_materno }}</span></p>
              <p>Correo: <span>{{ $docente->email }}</span></p>
              <p>RFC: <span>{{ $docente->rfc }}</span></p>
          </div>
      </div>
      <a class="bg-cyan-600 text-cyan-50 font-semibold w-36 hover:bg-cyan-300 hover:text-black py-1 px-3 rounded-lg text-center"
          href="{{ route('docentes.edit', $docente->id) }}">Editar
      </a>
  </main>
</x-layouts.app>
