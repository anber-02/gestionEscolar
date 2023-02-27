<x-layouts.app>
    <h1 class="text-center">Calificaciones</h1>

    <div>
        <h2 class="font-semibold">Grupos</h2>
        <ul>
            <li><a href="">T-201</a></li>
            <li><a href="">T-202</a></li>
            <li><a href="">T-501</a></li>
            <li><a href="">T-502</a></li>
            <li><a href="">DGS-801</a></li>
            <li><a href="">DGS-1001</a></li>
        </ul>
    </div>

    <div>
        <div id="materias"></div>
        <div id="tabla_calificaciones">
            <div class="px-3  md:px-32 py-8 w-full">
                <div class="shadow overflow-auto rounded border-b border-gray-200">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
                                <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">1re. Parcial</th>
                                <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">2do. Parcial</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">3er. Parcial</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Promedio</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            @foreach ($alumnos as $alumno)
                                <tr class="bg-gray-100">
                                    <td class="w-1/3 text-left py-3 px-4">
                                      {{ $alumno->a_paterno }}
                                      {{ $alumno->a_materno }}
                                      {{ $alumno->nombre }}
                                    </td>
                                    <td class="w-1/ text-left py-3 px-4">{{ $alumno->a_paterno }}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ $alumno->a_materno }}</td>
                                    <td class="text-left py-3 px-4">
                                        <a class="hover:text-blue-500"
                                            href="tel:622322662">{{ $alumno->telefono_alumno }}</a>
                                    </td>
                                    <td class="text-left py-3 px-4">
                                        <a class="hover:text-blue-500"
                                            href="mailto:jonsmith@mail.com">{{ $alumno->email_alumno }}</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
