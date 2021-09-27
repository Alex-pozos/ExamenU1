@extends('layout.plantilla')

@section('titulo', 'Vistas con blade en laravel 8')

@section('contenido')

    <div style="background:rgba(253, 204, 71, 0.589)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <h1 class="display-6 centrar">
                        Vistas con blade en laravel 8
                    </h1>
                    <hr>
                    <p class="lead" style="text-align: justify">
                        Laravel cuenta con plantillas Blade para introducir código PHP en nuestro código HTML de una manera
                        sencilla y segura, puedes crear y separar vistas en trozos de código que luego puedes aprovechar en
                        distintas vistas de la aplicación.
                        Empezamos a trabajar en las vistas, lo primero que haremos es crear la carpeta “layout” y dentro de
                        ella el archivo plantilla que será la plantilla que tendrán nuestras vistas en la ruta
                        resources/views/layout/plantilla.blade.php.

                    </p>
                    <p style="text-align:center">
                        <img class="imgresponsive" src="{{ asset('img/vistas/layout.png') }}" alt="">
                    </p>
                    <p class="lead" style="text-align: justify">
                        Código correspondiente a “layou.blade.php” con las directivas @.yiel y @.section.
                    </p>
                    <p style="text-align:center">
                        <img class="imgresponsive" src="{{ asset('img/vistas/codigo_layout.png') }}" alt="" height="600" width="1000">
                    </p>
                    <p class="lead" style="text-align: justify">
                        Ahora vamos a crear la carpeta “vistas” donde contendrá las vistas de ‘vistas.blade.php’,
                        ‘rutas.blade.php’, ‘controladores.blade.php’.
                    </p>
                    <p style="text-align:center">
                        <img src="{{ asset('img/vistas/vistas.png') }}" alt="" width="500" height="500">
                    </p>
                    <p class="lead" style="text-align: justify">
                        Si te fijas bien, tienen la extensión .blade.php. Dentro de ellas defines el código HTML.
                        <br>
                        Por cierto, en los siguientes ejemplos vamos a renderizar pasando simplemente el nombre de la vista,
                        sin extensiones:
                        <br>
                    <div class="card" style="background: rgba(116, 180, 63, 0.568); width:14rem">
                        <div class="card-body">
                            view("nombre_de_la_vista")
                        </div>
                    </div>

                    <br>
                    Si organizas tus vistas en distintas carpetas, usa el punto para separar:
                    <br>
                    <div class="card" style="background: rgba(116, 180, 63, 0.568); width:14rem">
                        <div class="card-body">
                            view("usuarios.mostrar")
                        </div>
                    </div>
                    <br>
                    También puedes usar la barra:
                    <br>
                    <div class="card" style="background: rgba(116, 180, 63, 0.568); width:14rem">
                        <div class="card-body">
                            view("usuarios/mostrar")
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
