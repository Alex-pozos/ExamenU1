@extends('layout.plantilla')

@section('titulo', 'Rutas con blade en larabel 8')

@section('contenido')

    <div style="background:rgba(0, 139, 139, 0.555)">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <h1 class="display-6 centrar">
                        Rutas con blade en larabel 8
                    </h1>
                    <hr>
                    <p class="lead" style="text-align: justify">
                        Todas las rutas de Laravel se definen en los archivos que se encuentran en la carpeta routes. El
                        framework carga estos archivos de forma automática. El archivo routes/web.php define las rutas para
                        la interfaz web. A estas rutas se les asigna el grupo de middleware web, el cual proporciona algunas
                        características como el estado de la sesión y la protección CSRF.
                        <br>
                        Para la mayoría de aplicaciones, se comenzará definiendo las rutas en el archivo routes/web.php. Se
                        puede acceder a las rutas definidas en routes/web.php simplemente escribiendo la URI definida en el
                        navegador. Por ejemplo, se puede acceder a la siguiente ruta simplemente accediendo a
                        http://127.0.0.1:8000/vistas desde el navegador:


                    </p>
                    <p style="text-align:center">
                        <img class="imgresponsive" src="{{ asset('img/rutas/ruta_navegador.png') }}" style="border: 1 solid black" width="1000"
                            height="800">
                    </p>
                    <p class="lead" style="text-align: justify">
                        Métodos de enrutamiento disponibles
                        El router permite registrar rutas que respondan a cualquier verbo HTTP:
                    <div class="card" style="background: rgba(199, 180, 14, 0.521); width:14rem">
                        <div class="card-body">
                            Route::get($uri, $callback);
                            Route::post($uri, $callback);
                            Route::put($uri, $callback);
                            Route::patch($uri, $callback);
                            Route::delete($uri, $callback);
                            Route::options($uri, $callback);
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
                     <img class="imgresponsive" src="{{ asset('img/rutas/ejemplo_ruta.png')}}" alt="">
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
