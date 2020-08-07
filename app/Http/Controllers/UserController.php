<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    

    public function accion1($nombre) {

        $amigosTotal = [
            'sofia' =>  ['amigox', 'amigoy', 'amigoz'],
            'monica' => ['amigo1', 'amigo2', 'amigo3'],
            'rocio' => ['amigo3', 'amigo4', 'amigo5'],
        ];

        $amigosIndividual = [];

        if ($nombre == 'sofia') {
            $amigosIndividual = $amigosTotal['sofia'];
        }
        if ($nombre == 'monica') {
            $amigosIndividual = $amigosTotal['monica'];
        }
        if ($nombre == 'rocio') {
            $amigosIndividual = $amigosTotal['rocio'];
        }

        return '<h1>Hola ' .  $nombre . '</h1> <br> Tus amigos son ' . $amigosIndividual[0] . ' '. $amigosIndividual[1]. ' '. $amigosIndividual[2];
    }

    public function accion2($nombre) {

        $amigosTotal = [
            'sofia' => ['amigox', 'amigoy', 'amigoz'],
            'monica' => ['amigo1', 'amigo2', 'amigo3'],
            'rocio' => ['amigo3', 'amigo4', 'amigo5'],
        ];

        $amigosIndividual = [];

        if ($nombre == 'sofia') {
            $amigosIndividual = $amigosTotal['sofia'];
        }
        if ($nombre == 'monica') {
            $amigosIndividual = $amigosTotal['monica'];
        }
        if ($nombre == 'rocio') {
            $amigosIndividual = $amigosTotal['rocio'];
        }

        return '<h1>Hola ' .  $nombre . '</h1> <br> Tus amigos son ' . $amigosIndividual[0] . ' '. $amigosIndividual[1]. ' '. $amigosIndividual[2];
    }

}
