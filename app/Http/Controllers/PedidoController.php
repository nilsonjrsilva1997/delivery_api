<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function fazerPedido()
    {
        $user = \Auth::user();

        return $user;
    }
}
