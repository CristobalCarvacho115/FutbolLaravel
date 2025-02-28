<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <!-- usuario -->
    <div class="container-fluid">

        <div class="row bg-dark text-white">
            <div class="row">
                <div class="col-8">
                    Bienvenido <span class="fw-bold">User1</span>
                </div>

                <!-- último  login -->
                <div class="col-3 text-end d-none d-lg-block">
                    Último inicio de sesión: 4 de abril de 2023 a las 9:25
                </div>

                <!-- cerrar sesión -->
                <div class="col-1 text-end d-none d-lg-block">
                    <a href="/login" class="text-white">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar -->
    {{-- Esto se saca de bootstrap y editamos según lo que leamos y queremos, prueba y error en caso de no entender --}}
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DOW302</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            {{-- con esto vamos a la página que queremos href="{{route(carpeta.index)}}" --}}
                                                {{-- Estos if sirve para hacer brillar la letra de la ruta donde estemos xd --}}
                            <a class="nav-link @if(Route::current()->getName()=='home.index') active @endif" href="{{route('home.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link @if(Route::current()->getName()=='equipos.index') active @endif"  href="{{route('equipos.index')}}">Equipos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" @if(Route::current()->getName()=='estadios.index') active @endif"  href="{{route('estadios.index')}}">Estadios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Estadísticas</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link @if(Route::current()->getName()=='jugadores.index') active @endif" href="{{route('jugadores.index')}}">Jugadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" @if(Route::current()->getName()=='partidos.index') active @endif"  href="{{route('partidos.index')}}">Partidos</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Configuración
                            </a>
                            <ul class="dropdown-menu bg-primary dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Cambiar Contraseña</a></li>
                                <li><a class="dropdown-item" href="#">Usuarios</a></li>
                                <li><a class="dropdown-item" href="#">Privacidad</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.usm.cl">UTFSM</a></li>
                            </ul>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="/login">Cerrar Sesión</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- contenido principal -->
    @yield('contenido-principal')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
