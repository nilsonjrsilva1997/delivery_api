<?php

namespace App\Http\Controllers;

use App\Restaurante;
use Illuminate\Http\Request;

use Auth;

class UsuarioController extends Controller
{
    public function meusRestaurantes()
    {

        $user_id = Auth::id();
        $restaurantes = Restaurante::query()
            ->where('user_id', $user_id)
            ->with('unidade')
            ->get();


        return $restaurantes;
    }
}
