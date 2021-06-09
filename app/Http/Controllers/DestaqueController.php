<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Restaurante;
use App\Unidade;
use Illuminate\Http\Request;

class DestaqueController extends Controller
{
    //

    public function getDestaques($restaurante, $unidade)
    {
        $restaurant = Restaurante::where('slug', $restaurante)
            ->first();

        if ($restaurant) {
            $unity = Unidade::where('restaurante_id', $restaurant->id)
                ->where('slug', $unidade)
                ->first();

            if ($unity) {
                $mais_pedido = null;

                if ($unity->mais_pedidos) {
                    $pedidos = Pedido::select('id')
                        ->with('produto_pedido')
                        ->where('unidade_id', $unity->id)
                        ->get();

                    $mais_pedido = [];

                    $pedidos->each(function ($pedido) use ($mais_pedido) {
                        $pedido->produto_pedido->each(function ($produto) use ($mais_pedido) {
                            if ($mais_pedido[$produto->id]) {
                                $mais_pedido[$produto->id] += 1;
                            } else {
                                $mais_pedido[$produto->id] = 1;
                            }
                        });
                    });
                }
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
