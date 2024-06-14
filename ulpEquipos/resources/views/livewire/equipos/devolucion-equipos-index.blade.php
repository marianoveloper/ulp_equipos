<!-- component -->
<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="mt-6 text-2xl font-bold text-center bg-green-200">Equipos a Devolver</h1>
                <hr class="mt-2 mb-6">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Fecha de Pedido</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Equipo</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                modelo</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Estado</th>
                            < </tr> </thead> <tbody>
                                @if(isset($usuarios))
                                @foreach($usuarios->equipos as $equipo)


                        <tr
                            class="flex flex-row flex-wrap mb-10 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden"></span>
                                {{$equipo->pivot->fecha_salida}}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden"></span>
                                {{$equipo->name}}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden"></span>
                                {{$equipo->modelo}}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">


                                @switch($equipo->pivot->status)

                                @case("Pedido")
                                <button
                                    class="px-4 py-2 font-bold text-white bg-yellow-500 rounded hover:bg-yellow-700">
                                    <i class="fas fa-exclamation-triangle"></i></button>
                                @break
                                @case("Prestado")
                                <button 
                                    class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                    <i class="fas fa-spinner"></i></button>
                                @break
                                @case("Devuelto")

                                  <button 
                                    class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                                    <i class="fas fa-clipboard-check"></i></button>
                                @break

                                @default

                                @endswitch


                            </td>

                        </tr>

                        @endforeach
                        @endif
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
