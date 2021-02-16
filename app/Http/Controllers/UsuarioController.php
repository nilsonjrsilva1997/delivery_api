<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function meusRestaurantes()
    {
        return \Auth::user()->with('restaurante')
        ->with('restaurante.usuario_unidades.unidade')
        ->get();
    }
}
