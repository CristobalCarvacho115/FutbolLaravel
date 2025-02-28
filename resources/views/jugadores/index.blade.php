{{-- EXTENSIÓN DE NUESTRO NAVBAR Y DEMÁS (carpeta.pagina), el nombre es el común pero es opcional--}}
@extends('layouts.master')
{{-- aquí lo que pusimos dentro del navbar dentro de un section (nombre que elegimos) --}}
@section('contenido-principal')
    <!-- datos -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Jugadores</h3>
            </div>
        </div>

        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-8 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Posición</th>
                            <th>Número</th>
                            <th>Equipo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jugadores as $num=>$jugador)
                        {{-- En la tabla se pone el foreach hasta el final donde se cierra con endforeach --}}
                        {{-- $tablas as $tabla, en caso de querer un contador $tablas as $num->$tabla --}}
                        {{-- {{TODO LO QUE LLAMEMOS DENTRO DE DOS LLAVES}} --}}
                        <tr>
                            {{-- No podemos usar la id para ennumerar así que usamos el contador num --}}
                            <td class="align-middle">{{$num+1}}</td>
                            {{-- llamamos a los datos: $tabla->dato --}}
                            <td class="align-middle">{{$jugador->apellido}}</td>
                            <td class="align-middle">{{$jugador->nombre}}</td>
                            <td class="align-middle">{{$jugador->posicion}}</td>
                            <td class="align-middle">{{$jugador->numero}}</td>
                            <td class="align-middle">
                                {{$jugador->equipo!=null?$jugador->equipo->nombre:'Sin equipo'}}
                                <!--condicion v? si verdadero : sino falso -->
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip" data-bs-title="Borrar {{$jugador->nombre}}"
                                    data-bs-title="Borrar Jugador">
                                    <span class="material-icons">delete</span>
                                </a>
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar Jugador">
                                    <span class="material-icons">edit</span>
                                </a>
                                <a href="#" class="btn btn-sm btn-info pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Ver Jugador">
                                    <span class="material-icons">group</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- form agregar equipo -->
            <div class="col-12 col-lg-4 order-first order-lg-last">
                <div class="card">
                    <div class="card-header bg-dark text-white">Agregar Jugadores</div>
                    <div class="card-body">
                        {{-- Para agregar el mothod=POST, y action={{route('carpeta.store')}} --}}
                        <form method="POST" action="{{route('jugadores.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido:</label>
                                {{-- EL INPUT DEBE TENER NAME Y ESO MANDARA A AÑADIR EN LA FUNCIÓN STORE --}}
                                <input type="text" id="apellido" name="apellido"  class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                {{-- EL INPUT DEBE TENER NAME Y ESO MANDARA A AÑADIR EN LA FUNCIÓN STORE --}}
                                <input type="text" id="nombre" name="nombre"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="posicion">Posición:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                    {{-- EL INPUT DEBE TENER NAME Y ESO MANDARA A AÑADIR EN LA FUNCIÓN STORE --}}
                                    {{-- En los radio el value es nuestro dato que se enviará, nuestro dato real aunque al usuario le salga otra cosa --}}
                                        <input type="radio" class="form-check-input" id="pos-arquero" name="posicion" value="Arquero">
                                        <label for="pos-arquero" class="form-check-lable">Arquero</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="pos-defensa" name="posicion" value="Defensa">
                                        <label for="pos-defensa" class="form-check-lable">Defensa</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="pos-volante" name="posicion" value="Volante">
                                        <label for="pos-volante" class="form-check-lable">Volante</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="pos-delantero" name="posicion" value="Delantero">
                                        <label for="pos-delantero" class="form-check-lable">Delantero</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="numero">Número Camiseta:</label>
                                {{-- min para el minimo y max para el maximo, no sirve de mucho xd --}}
                                <input class="form-control" type="number" name="numero" id="numero" min="1" max="99">
                            </div>
                            <div class="form-group">
                                <label for="equipo">Equipo</label>
                                <select class="form-control" name="equipo" id="equipo">
                                    {{-- el select debe llevar name para obtener el dato --}}
                                    {{-- vamos a buscar un dato en equipo así que foreach --}}
                                    @foreach ($equipos as $equipo)
                                        {{-- value será nuestro valor real, en este caso será el id del equipo a elección aunque al usuario le saldrá el nombre --}}
                                            {{-- <lo que ve el resquest> lo que ve el usuario </>--}}
                                        <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button  type="reset" class="btn btn-warning">Cancelar</button>
                                <button type="submit" class="btn btn-success">Agregar Equipo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
