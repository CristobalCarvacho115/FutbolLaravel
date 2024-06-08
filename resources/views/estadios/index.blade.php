{{-- EXTENSIÓN DE NUESTRO NAVBAR Y DEMÁS (carpeta.pagina), el nombre es el común pero es opcional--}}
@extends('layouts.master')
{{-- aquí lo que pusimos dentro del navbar dentro de un section (nombre que elegimos) --}}
@section('contenido-principal')
    <!-- datos -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Estadios</h3>
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
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estadios as $num=>$estadio)
                        {{-- En la tabla se pone el foreach hasta el final donde se cierra con endforeach --}}
                        {{-- $tablas as $tabla, en caso de querer un contador $tablas as $num->$tabla --}}
                        {{-- {{TODO LO QUE LLAMEMOS DENTRO DE DOS LLAVES}} --}}
                        <tr>
                            {{-- No podemos usar la id para ennumerar así que usamos el contador num --}}
                            <td class="align-middle">{{$num+1}}</td>
                            {{-- llamamos a los datos: $tabla->dato --}}
                            <td class="align-middle">{{$estadio->nombre}}</td>
                            <td class="text-center" style="width: 1rem">
                                <!--BORRAR -->
                                {{-- en el form poner method=POST y action={{route('carpeta.destroy',$tabla->id)}} --}}
                                <form method="POST" action="{{route('estadios.destroy',$estadio->id)}}">
                                    {{-- El formulario para ser válido debe usarse @csrf, si es de borrado se le añade @method('delete') --}}
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip"
                                    data-bs-title="Borrar {{$estadio->nombre}}"><span class="material-icons">delete</span></button>
                                </form>
                                {{-- <a href="#" >

                                </a> --}}
                                <!--/BORRAR -->
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar {{$estadio->nombre}}">
                                    <span class="material-icons">edit</span>
                                </a>
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="#" class="btn btn-sm btn-info pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Ver {{$estadio->nombre}}">
                                    <span class="material-icons">group</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- form agregar estadio -->
            <div class="col-12 col-lg-4 order-first order-lg-last">
                <div class="card">
                    <div class="card-header bg-dark text-white">Agregar Estadio</div>
                    <div class="card-body">
                        {{-- Para agregar el mothod=POST, y action={{route('carpeta.store')}} --}}
                        <form method="POST" action="{{route('estadios.store')}}">

                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                {{-- EL INPUT DEBE TENER NAME Y ESO MANDARA A AÑADIR EN LA FUNCIÓN STORE --}}
                                <input type="text" id="nombre" name="nombre"  class="form-control">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button  type="reset" class="btn btn-warning">Cancelar</button>
                                <button type="submit" class="btn btn-success">Agregar Estadio</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
