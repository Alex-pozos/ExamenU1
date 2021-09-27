<?php

use App\Http\Controllers\ControlController;
use App\Http\Controllers\MigracionesController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\VistasController;
use App\Http\Controllers\WelcomeController;
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


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', WelcomeController::class);

// Route::get('/vistas', function () {
//     return view('vistas.vistas');
// });
Route::get('/vistas', [VistasController::class,'vistas']);

// Route::get('/rutas', function () {
//     return view('vistas.rutas');
// });
Route::get('/rutas', [RutasController::class,'rutas']);

// Route::get('/controladores', function () {
//     return view('vistas.controladores');
// });
Route::get('/controladores', [ControlController::class,'controladores']);

// Route::get('/migraciones', function () {
//     return view('vistas.migraciones');
// });
Route::get('/migraciones', [MigracionesController::class,'migraciones']);
