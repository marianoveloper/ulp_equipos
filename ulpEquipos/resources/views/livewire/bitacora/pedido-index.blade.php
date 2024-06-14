<!-- component -->
<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="mt-6 text-2xl font-bold text-center bg-green-200">Empleados con Pedidos</h1>
                <hr class="mt-2 mb-6">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Empleado</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Email</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                               Pedidos</th>
                            </tr> </thead> <tbody>
                                @if(isset($usuarios))
                                @foreach($usuarios as $equipo)


                                <tr
                                class="flex flex-row flex-wrap mb-10 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
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
                                {{$equipo->email}}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                <button  href="{{route('pedidos.index')}}"
                                    class="px-4 py-2 font-bold text-white bg-yellow-500 rounded hover:bg-yellow-700">
                            
                                    <a href="{{ route('pedidos.show',$equipo->id) }}" class="btn btn-primary">Ver más</a>

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

