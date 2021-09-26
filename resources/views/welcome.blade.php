@extends('layout.plantilla')

@section('titulo', 'Instalación y peusta en marcha de laravel 8')

@section('contenido')
    <div style="background:silver">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <h1 class="display-6 centrar">
                        Instalación y puesta en marcha
                    </h1>
                    <hr>
                    <div class="col-sm-12">
                        <p class="lead" style="text-align: justify">
                            Primero, debes contar con una plataforma de trabajo que tenga las herramientas básicas de
                            Backend, tales como: Apache/Nginx, MySQL y PHP. Sin embargo, aunque puedes instalar los
                            servidores de forma independiente con el gestor de programas de tu sistema operativo, esto casi
                            siempre requiere de una gran inversión de tiempo ante los contratiempos que pueden surgir en la
                            instalación, por lo que se hace necesario contar con las plataformas de trabajo más
                            automatizadas.
                        </p>
                        <ul class="lead">
                            <li><a href="https://www.wampserver.com/en/" target="_blank" rel="noopener noreferrer">Wamp</a>
                            </li>
                            <li><a href="https://www.apachefriends.org/es/index.html" target="_blank"
                                    rel="noopener noreferrer">Xampp</a></li>
                            <li><a href="https://www.mamp.info/en/" target="_blank" rel="noopener noreferrer">Mamp</a></li>
                        </ul>
                        <div class="card" style="background: rgba(116, 180, 63, 0.568)">
                            <div class="card-body">
                                Nota: Recuerda revisar la versión de cada uno de los programas que incluyen. Te recomendamos
                                como versiones mínimas: PHP 7.3 o superior, Apache 2.0, MySQL 5.6 o superior (si prefieres
                                MariaDB, usa la versión 10.3 como mínimo). </div>
                        </div>
                        <p class="lead mt-3" style="text-align:justify">
                            En mi caso vamos a instalar Xampp:
                        </p>
                        <p style="text-align:center">
                            <img src="{{ asset('img/xampp.jpg') }}" alt="">
                        </p>
                        <p class="lead mt-3" style="text-align: justify">
                            Descargaremos el manejador de dependencias, en este ejemplo lo vamos a hacer con composer ya que
                            es una herramienta de fácil manejo y amigable con laravel.
                        </p>
                        <p style="text-align:center">
                            <img src="{{ asset('img/composer.png') }}" alt="" height="300" width="350">
                        </p>
                        <p style="text-align:center">
                            Dependency Manager For PHP
                        </p>
                        <p class="lead" style="text-align: justify">
                            Verificaremos con el comando “composer -v” para ver si ya está instalado composer.
                        </p>
                        <p style="text-align:center">
                            <img src="{{ asset('img/version_composer.png') }}" alt="">
                        </p>
                        <p class="lead" style="text-align: justify">
                            También deberemos de instalar Node js ya que esto nos permitirá habilitar la interfaz de línea
                            de comandos de nuestro ordenador.
                        </p>
                        <p style="text-align:center">
                            <img src="{{ asset('img/nodejs.png') }}" alt="" height="300" width="300">
                        </p>
                        <p class="lead" style="text-align: justify">
                            Una vez que ya hallamos instalado las herramientas antes mencionadas abriremos la terminal de
                            nuestro ordenador y nos vamos a posicionar en la carpeta de desarrollo de nuestra herramienta
                            Xampp. Y crearemos una carpeta de” Back-end”, posteriormente vamos a crear la carpeta de “Examen
                            U1” Ejemplo de la ruta C:\xampp\htdocs\Back-end\ExamenU1
                        </p>
                        <p style="text-align:center">
                            <img src="{{ asset('img/ruta.png') }}" alt="">
                        </p>
                        <p class="lead" style="text-align: justify">
                            Con el siguiente comando vamos a instalar laravel “#composer global require laravel/installer”
                        </p>
                        <p style="text-align:center">
                            <img src="{{ asset('img/instalacion_composer.png') }}" alt="">
                        </p>
                        <p class="lead" style="text-align: justify">
                            Una vez que ya tengamos instalado todo lo necesario comenzaremos con la creación del proyecto en
                            laravel con el siguiente comando, “composer create-project laravel/laravel ExamenU1”.
                        </p>
                        <p style="text-align: center">
                            <img src="{{ asset('img/creacion_proyecto.png') }}" alt="">
                        </p>
                        <p class="lead" style="text-align: justify">
                            Esperaremos un poco a qué termine de crear los ficheros, la estructura de nuestro proyecto y la
                            descarga de datos que este requiere.
                        </p>
                        <p style="text-align: center">
                            <img src="{{ asset('img/descarga.png') }}" alt="">
                        </p>
                        <p class="lead" style="text-align: justify">
                            Una vez terminado nos mandara el siguiente mensaje de que se creó satisfactoriamente.
                        </p>
                        <p style="text-align:center">
                            <img src="{{ asset('img/fin.png') }}" alt="">
                        </p>
                        <p class="lead" style="text-align: justify">
                            Ahora nos vamos a dirigir a la carpeta donde se aloja nuestro proyecto y veremos si se creó
                            nuestro proyecto.
                            <br>
                            Y efectivamente se creó el proyecto con todos sus datos.
                        </p>
                        <p style="text-align:center">
                            <img src="{{ asset('img/ruta_pc.png') }}" alt="">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
