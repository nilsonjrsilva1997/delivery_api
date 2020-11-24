<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use App\Restaurante;

class UnidadeRestauranteController extends Controller
{
    public function byApelido($apelido)
    {
        return Restaurante::where(["slug" => $apelido])->get();
    }

    public function byApelidoCidade($apelido, $cidade)
    {
        return Unidade::where(["unidades.slug" => $apelido])
                ->where(["restaurantes.slug" => $cidade])
                ->join('restaurantes', 'restaurantes.id', '=', 'unidades.restauranteId')
                ->get();
    } 
}
