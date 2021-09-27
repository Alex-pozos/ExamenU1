<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/vistas', function () {
    return view('vistas.vistas');
});
Route::get('/rutas', function () {
    return view('vistas.rutas');
});
Route::get('/controladores', function () {
    return view('vistas.controladores');
});
Route::get('/migraciones', function () {
    return view('vistas.migraciones');
});
