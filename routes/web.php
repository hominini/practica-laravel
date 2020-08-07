<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/saludo/{nombre}', function ($nombre) {
    // accion cuando me pidan perros
    return '<h1>hola '. $nombre .'</h1>';
});


Route::get('/usuario/{nombre}', 'UserController@accion1');


// operaciones crud
// c = crear, r = leer, u = actualizar, d = borrar

// crear
Route::get('/juego', 'JuegoController@crear');
Route::get('/crear_juego', 'JuegoController@crear');

Route::post('/crear_juego', 'JuegoController@guardar');


// leer, consultar
Route::get('/ver_juegos', 'JuegoController@ver');

// actualizar
Route::get('/actualizar_juego/{id_juego}', 'JuegoController@formActualizar');
Route::post('/actualizar_juego', 'JuegoController@actualizar');

// borrar
Route::get('/borrar_juego/{id_juego}', 'JuegoController@borrar');

