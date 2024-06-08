{{-- EXTENSIÓN DE NUESTRO NAVBAR Y DEMÁS (carpeta.pagina), el nombre es el común pero es opcional--}}
@extends('layouts.master')
{{-- aquí lo que pusimos dentro del navbar dentro de un section (nombre que elegimos) --}}
@section('contenido-principal')
    <!-- datos -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Partidos</h3>
            </div>
        </div>

        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-8 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Estadio</th>
                            <th>Fecha</th>
                            <th>Termino</th>
                            <th>Estado</th>
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partidos as $num=>$partido)

                            $fechas as fechaa

                        {{-- En la tabla se pone el foreach hasta el final donde se cierra con endforeach --}}
                        {{-- $tablas as $tabla, en caso de querer un contador $tablas as $num->$tabla --}}
                        {{-- {{TODO LO QUE LLAMEMOS DENTRO DE DOS LLAVES}} --}}
                        <tr>
                            {{-- No podemos usar la id para ennumerar así que usamos el contador num --}}
                            <td class="align-middle">{{$num+1}}</td>
                            {{-- llamamos a los datos: $tabla->dato --}}
                            <td class="align-middle">{{$partido->estadio->nombre}}</td>
                            <td class="align-middle">{{$partido->fechaa}}</td>
                            {{-- esto debió ser así, pero el profe trolleó e hizo que llamaramos una variable igual --}}
                            {{-- a como le ponemos a la tabla fechas (fecha) así que improvisé con el foreach de abajo --}}
                            {{-- pero no debería ser con eso, de hecho le falta un if pero que paja, el profe no se fijó tampoco xd --}}
                            {{-- <td class="align-middle">{{$partido->fecha->termino}}</td> --}}
                            @foreach ($fechas as $fecha)
                                <td class="align-middle">{{$fecha->termino}}</td>
                            @endforeach
                            <td class="align-middle">
                                {{-- El if para pregunar si estado es tal entonces muestra esto, ya que estado lo hicimos por numero --}}
                                @if ($partido->estado==0) En espera @endif
                                @if ($partido->estado==1) En disputa @endif
                                @if ($partido->estado==2) Terminado @endif
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <!--BORRAR -->
                                {{-- en el form poner method=POST y action={{route('carpeta.destroy',$tabla->id)}} --}}
                                <form method="POST" action="{{route('partidos.destroy',$partido->id)}}">
                                    {{-- El formulario para ser válido debe usarse @csrf, si es de borrado se le añade @method('delete') --}}
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip"
                                    data-bs-title="Borrar {{$partido->id}}"><span class="material-icons">delete</span></button>
                                </form>
                                <!--/BORRAR -->
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar {{$partido->id}}">
                                    <span class="material-icons">edit</span>
                                </a>
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="#" class="btn btn-sm btn-info pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Ver {{$partido->id}}">
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
                    <div class="card-header bg-dark text-white">Agregar Partido</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('partidos.store')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="estadio">Estadio</label>
                                <select class="form-control" name="estadio_id" id="equipo">
                                    @foreach ($estadios as $estadio)
                                        {{-- el foreach buscando el estadio --}}
                                        {{-- value que da al request     lo que muestra al usuario--}}
                                        <option value="{{$estadio->id}}">{{$estadio->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="numero">Número</label>
                                <input class="form-control" type="number" name="numero" id="numero" min="1" max="500">
                            </div>
                            <div class="form-group mb-3">
                                <label for="estado">Estado</label>
                                <select class="form-control" name="estado" id="estado">
                                        <option value="0">En espera</option>
                                        <option value="1">En disputa</option>
                                        <option value="2">Terminado</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" id="fecha" name="fecha"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="termino" class="form-label">Termino</label>
                                <input type="date" id="termino" name="termino"  class="form-control">
                            </div>
                            <div class="form-group mb-3 d-grid gap-2 d-lg-block">
                                <button  type="reset" class="btn btn-warning">Cancelar</button>
                                <button type="submit" class="btn btn-success">Agregar partido</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
