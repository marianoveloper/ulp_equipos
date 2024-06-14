<table class="table table-striped">
    <thead>
        <tr class="info">
            <th>Equipo</th>
            <th>Modelo</th>
            <th>Fecha de Salida</th>
            <th>Fecha de Devolucion</th>
            <th>Cobertura</th>
        </tr>
    </thead>

    <tbody>
        @foreach($equipo->equipos as $equipos)
        <tr data-toggle="collapse" class="accordion-toggle"
            data-target="#demo10">

            <td>{{$equipos->name}}</td>
            <td>{{$equipos->modelo}} </td>
            <td> {{$equipos->pivot->fecha_salida}}</td>
            <td> {{$equipos->pivot->fecha_devolucion}}</td>
            <td>
                {{$equipo->pivot->descripcion_cobertura}}
            </td>
        </tr>


        @endforeach
    </tbody>
</table>