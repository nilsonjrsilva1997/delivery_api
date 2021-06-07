<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Restaurante;
use App\Unidade;
use Illuminate\Http\Request;

class DestaqueController extends Controller
{
    public function maisPedido($restaurante, $unidade)
    {
        $restaurant = Restaurante::where('slug', $restaurante)
            ->first();

        if ($restaurant) {
            $unity = Unidade::where('restaurante_id', $restaurant->id)
                ->where('slug', $unidade)
                ->first();

            if ($unity) {

                $pedidos = Pedido::where('unidade_id', $unity->id)
                    ->get();

                $pedido_ids = $pedidos->pluck('id');

                return $pedido_ids;
            } else {
                response([
                    "data" => null,
                    "message" => "Unidade não encontrada",
                    "error" => true
                ], 404);
            }
        } else {
            response([
                "data" => null,
                "message" => "Restaurante não encontrado",
                "error" => true
            ], 404);
        }
    }
}
