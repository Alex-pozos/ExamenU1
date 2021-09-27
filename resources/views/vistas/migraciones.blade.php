@extends('layout.plantilla')

@section('titulo', 'Migraciones en laravel 8')

@section('contenido')

    <div style="background:rgba(95, 252, 121, 0.795)">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <h1 class="display-6 centrar">
                        Migraciones en larabel 8
                    </h1>
                    <hr>
                    <p class="lead" style="text-align: justify">
                        Las migraciones son como el control de versiones de su base de datos, lo que le permite a su equipo
                        modificar y compartir el esquema de la base de datos de la aplicación. Las migraciones generalmente
                        se combinan con el generador de esquemas de Laravel para construir el esquema de la base de datos de
                        su aplicación. Si alguna vez ha tenido que decirle a un compañero de equipo que agregue manualmente
                        una columna a su esquema de base de datos local, se ha enfrentado al problema que resuelven las
                        migraciones de base de datos.
                        <br>
                        La fachada Schema de Laravel proporciona soporte independiente de la base de datos para crear y
                        manipular tablas en todos los sistemas de base de datos compatibles con Laravel.
                    </p>
                    <p class="lead" style="text-align: justify">
                    <h4>Generacion de migraciones</h4>
                    <p class="lead" style="text-align: justify">Para crear una migración, use el comando
                        make:migration Artisan :</p>
                    <div class="card" style="background: rgba(199, 180, 14, 0.521); width:14rem">
                        <div class="card-body">
                           php artisan make:migration create_users_table

                        </div>
                    </div>
                    </p>
                    <p class="lead" style="text-align: justify">
                    <h4>Rutas con parámetros</h4>
                    </p>
                    <p class="lead" style="text-align: justify">
                        Parámetros requeridos
                        A veces necesitarás capturar segmentos de la URI dentro de tu ruta. Por ejemplo, puede que necesites
                        capturar el ID de un usuario de la URL. Puede hacerlo definiendo los parámetros de la ruta:
                    <div class="card" style="background: rgba(199, 180, 14, 0.521); width:18rem">
                        <div class="card-body">
                            Route::get('user/{id}', function ($id) {
                            <br>
                            return 'User '.$id;
                            <br>
                            });
                        </div>
                    </div>
                    </p>
                    <p class="lead" style="text-align: justify">
                        El siguiente es un ejemplo de las rutas vasicas del proyecto que se esta desarrollando

                    </p>
                    <p style="text-align:center" style="width: 15rem">
                        <img class="imgresponsive" src="{{ asset('img/rutas/ejemplo_ruta.png') }}" alt="">
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
