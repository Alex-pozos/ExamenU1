<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/index/laravel.png') }}" type="image/x-icon">
    {{-- Estilos proprios en CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- bootstrap style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Scripts bootstrap --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title> @yield('titulo')</title>
</head>

<body>
    <nav class="navbar nav-tabs lead">

        <a href="/"><img src="{{ asset('img/index/laravel-icon.png') }}" width="150" height="80"></a>
        <a class="nav-link" href="#" style="color:deepskyblue;"></a>
        <b class="nav-pills" href="#" style="color:deepskyblue;"><i class="fab fa-laravel"></i>
            Examen U1 </b>


        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/vistas" style="color: rgb(255, 187, 0)"><i
                        class="far fa-images"></i>
                    Vistas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/rutas" style="color:aqua;"><i class="fas fa-route"></i>
                    Rutas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/controladores" style="color:hsl(241, 100%, 68%);"><i class="fas fa-biohazard"></i>
                    Controladores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/migraciones" style="color:#9ff500;"><i class="fas fa-database"></i>
                    Migraciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/" style="color:#15df05;"><i class="fas fa-home"></i>
                    Inicio</a>
            </li>
        </ul>
    </nav>

    {{-- Contemido de las demás vistas --}}
    @yield('contenido')


    {{-- Pie de pagina --}}
    <div class="card text-center  bordeFooter">
        <div class="card-header" style="background: #c7d491">
            <h5 class="card-title lead">Contáctanos <i class="fab fa-teamspeak"></i> </h5>
        </div>
        <div class="card-body lead t-contactanos">
            <a class="m-4" href="#" data-toggle="modal" data-target="#modal_email" style="color:#bc172e">
                <i class="far fa-envelope"></i> Email
            </a>
            <a class="m-4" href="#" data-toggle="modal" data-target="#modal_telefono" style="color:#68a266">
                <i class="fas fa-phone-square-alt"></i> Teléfonos
            </a>
            <a class="m-4" href="#" data-toggle="modal" data-target="#modal_direccion" style="color:#d9a829">
                <i class="fas fa-map-marked-alt"></i> Dirección
            </a>
            <a class="m-4" href="" data-toggle="modal" data-target="#modal_youtube" style="color:red">
                <i class="fab fa-youtube"></i> YouTube
            </a>
            <a class="m-4" href="" data-toggle="modal" data-target="#modal_facebook" style="color:#3e66af">
                <i class="fab fa-facebook-square"></i> Facebook
            </a>
        </div>
        <div class="card-footer text-muted lead" style="background: #c7d491">
            <img src="{{ asset('img/index/laravel-icon.png') }}" width="150px" height="80px" alt=""> 2021© Todos los
            derechos reservados
        </div>
    </div>
</body>

</html>
