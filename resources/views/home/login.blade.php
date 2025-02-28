

{{-- Login generico xd no aplicó esto por ahora --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <title>Sistema de Campeonato de Fútbol</title>

</head>
<body style="background: linear-gradient(to bottom, #660066 0%, #ff99cc 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <!-- <button class="btn btn-primary">Primary</button>
        <button class="btn btn-secondary">Secondary</button> -->
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-light" style="height: 25rem;">
                    <!-- titulo y logo -->
                    <div
                        class="col-lg-4 bg-primary d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="bg-white p-2 mb-3 rounded">
                            <img src="{{ asset('images/isotipo_usm_color.jpg') }}" style="width: 7rem;">
                        </div>
                        <h4 class="text-light">Sistema de Campeonato de Fútbol</h4>
                        <h4 class="text-light">DOW302 - Diseño y Programación Orientada a la WEB</h4>
                    </div>
                    <!-- / FIN titulo y logo -->


                    <!-- Formulario -->
                    <div class="col-lg-8 bg-white">
                        <h4>Inicio de Sesión</h4>
                        <small>Proporcione sus credenciales para ingresar al Sistema</small>
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="usename" class="form-label">Nombre de Usuario</label>
                                        <input type="text" id="username" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" class="form-control">
                                    </div>
                                    <div class="mb-3 text-end">
                                        <a href="/" class="btn btn-success">Iniciar Sesión</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- / FIN Formulario -->
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
