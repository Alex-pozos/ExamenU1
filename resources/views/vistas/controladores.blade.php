@extends('layout.plantilla')

@section('titulo', 'Controladores en laravel 8')

@section('contenido')

    <div style="background:rgba(177, 93, 255, 0.555)">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <h1 class="display-6 centrar">
                        Controladores en laravel 8
                    </h1>
                    <hr>
                    <p class="lead" style="text-align: justify">
                        Los controladores son un mecanismo que nos permite agrupar la lógica de peticiones HTTP relacionadas
                        y de esta forma organizar mejor nuestro código. En esta quinta lección del Curso de Laravel desde
                        cero aprenderemos a hacer uso de ellos y veremos además cómo las pruebas unitarias nos permiten
                        verificar los cambios que introducimos en nuestro código de forma fácil y rápida.


                    </p>
                    <p class="lead" style="text-align: justify">
                    <h4>Generar un controlador</h4>
                    </p>
                    <p class="lead" style="text-align: justify">
                        Generamos un nuevo controlador con el comando de Artisan make:controller pasándole el nombre que
                        queremos darle. En el ejemplo el nombre es VistasController:
                    <div class="card" style="background: rgba(199, 14, 14, 0.61); width:25rem; color:white">
                        <div class="card-body">
                            php artisan make:controller VistasController
                        </div>
                    </div>
                    </p>
                    <p class="lead" style="text-align: justify">
                        Los siguientes son ejemplos de controladores del proyecto que se esta desarrollando

                    </p>
                    <p style="text-align:center" style="width: 15rem">
                        <img  src="{{ asset('img/controladores/controladores.png') }}" alt="" width="600" height="200">
                    </p>
                    <p class="lead" style="text-align: justify">
                        Una vez que ya tengamos nuestros controladores creados vamos a ir a donde están alojados y veremos
                        que se crearon en la siguiente ruta: appHttpControllers.
                    </p>
                    <p style="text-align:center">
                        <img src="{{ asset('img/controladores/controles_app.png') }}" alt="">
                    </p>
                    <p class="lead" style="text-align: justify">
                        El primer controlador que es el más importante es el de “WelcomeController” que es el primero que se
                        va a presentar en el navegador para ello vamos a crear dentro de él una función con la directiva
                        __invoke.
                    </p>
                    <p style="text-align:center">
                        <img  src="{{ asset('img/controladores/welcome.png') }}" alt="" width="600" height="200">
                    </p>
                    <p class="lead" style="text-align: justify">
                        Una vez que hayamos hecho eso vamos a dirigirnos al aparatado de las rutas para modificar la primera
                        remplazando el código por el siguiente:
                    <div class="card" style="background: rgba(199, 14, 14, 0.61); width:25rem; color:white">
                        <div class="card-body">
                            Route::get('/', WelcomeController::class);
                        </div>
                    </div>
                    </p>
                    <p style="text-align:center">
                        <img  src="{{ asset('img/controladores/web_welcome.png') }}" alt="" width="600" height="200">
                    </p>
                    <p class="lead" style="text-align: justify">
                        Ahora vamos a modificar el controlador de vistas creando una función donde se va a retornar la vista
                        solicitada:
                    </p>
                    <p style="text-align:center">
                        <img  src="{{ asset('img/controladores/vistas_control.png') }}" alt="" width="600" height="200">
                    </p>
                    <p class="lead" style="text-align: justify">
                        De igual manera en el aparatado de las rutas vamos a modificar cada uno de los controladores como en
                        el siguiente ejemplo, pero ahora vamos a darle a la clase la importación. Y de esa manera ir
                        remplazando todas las tutas con su respectivo controlador.
                    </p>
                    <p style="text-align:center">
                        <img src="{{ asset('img/controladores/rutas_controladores.png') }}" alt="">
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
