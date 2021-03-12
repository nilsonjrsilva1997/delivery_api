<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function meusRestaurantes()
    {
        $restaurantes = \Auth::user()->with('restaurante')
            ->with('restaurante.unidade')
            ->get();

        $restaurantesArray = [];

        foreach ($restaurantes as $restaurante) {
            $restaurantesArray[] = $restaurante['restaurante'];
        }

        return $restaurantesArray;
    }
}
