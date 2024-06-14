<div>

    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th colspan="3">Nombre</th>
                                <th colspan="3">email</th>


                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($bitacoras as $equipo)

                            <tr data-toggle="collapse" data-target="#demo{{$equipo->id}}" class="accordion-toggle">
                                <td><button class="btn btn-default btn-xs"><span
                                            class="glyphicon glyphicon-eye-open"></span></button></td>
                                <td colspan="3">{{$equipo->name}}</td>
                                <td colspan="3">{{$equipo->email}}</td>

                            </tr>

                            <tr>
                                <td colspan="12" class="hiddenRow">
                                    <div class="accordian-body collapse" id="demo{{$equipo->id}}">
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
                                                @foreach($equipo->equipos as $equipop)
                                                <tr data-toggle="collapse" class="accordion-toggle"
                                                    data-target="#demo{{$equipo->id}}">

                                                    <td>{{$equipop->name}}</td>
                                                    <td>{{$equipop->modelo}} </td>
                                                    <td> {{$equipop->pivot->fecha_salida}}</td>
                                                    <td> {{$equipop->pivot->fecha_devolucion}}</td>
                                                    <td>
                                                        {{$equipop->pivot->descripcion_cobertura}}
                                                    </td>
                                                </tr>


                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </td>
                            </tr>



                            </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>



            </div>

        </div>

    </div>
</div>
