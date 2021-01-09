<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Estatistica;

class EstatisticaController extends Controller
{
    public function receitaDia()
    {
        return Estatistica::receitaDia();
    }

    public function pedidosPorDia()
    {
        return Estatistica::pedidosPorDia();
    }
}
