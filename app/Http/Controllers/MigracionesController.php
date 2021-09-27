<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MigracionesController extends Controller
{
    public function migraciones() {
        return view('vistas.migraciones');
    }
}
