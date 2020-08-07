<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function crear() {
       return view('practica.formulario');
    }

    public function guardar(Request $request) {

        // 1. guardar juego
        // crear variable vacia para llenar
        $juego = new \App\Juego();

        // llenar datos en una variable ($juego)
        $juego->nombre = $request->name;
        $juego->genero = $request->genre;
        $juego->precio = $request->price;

        // guardar en la base de datos, en el disco duro
        $juego->save();

        // 2. redireccionar a otro lado
        return redirect('/ver_juegos');
    }

    public function ver()
    {
        // obtener todos los juegos
        // la funcion all() retorna TODOS los registros
        $datos = \App\Juego::all();

        // retornar una vista al usuario, se pasa la variable datos
        return view('practica.ver', [ 'juegos' => $datos ]);
    }

    public function formActualizar($id_juego) {

        $datos_juego = \App\Juego::find($id_juego);
        
        return view('practica.actualizar', ['juego' => $datos_juego]);
    }

    public function actualizar(Request $request) {

        // obtengo desde la base de datos un juego por medio del id
        $juego = \App\Juego::find($request->id);

        // llenar datos en una variable ($juego)
        $juego->nombre = $request->name;
        $juego->genero = $request->genre;
        $juego->precio = $request->price;

        // guardar en la base de datos, en el disco duro
        $juego->save();

        // 2. redireccionar a otro lado
        return redirect('/ver_juegos');
    }

    public function borrar($id_juego) {
        $juego = \App\Juego::find($id_juego);
        $juego->delete();
        return redirect('/ver_juegos');

    }

}
