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
    $vistas = view('layout/menu').
                view('welcome');
    return $vistas;
});

Route::get('/juegos/{juegoSeleccionado}', function ($juegoSelecionado) {


    $data = [
        "nombre"=>$juegoSelecionado
    ];
    $vistas =
              view('layout/menu',$data).
                view('juegos/index');
                
                
                return $vistas;
});


