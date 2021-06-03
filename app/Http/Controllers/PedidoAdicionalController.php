<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PedidoAdicional;

class PedidoAdicionalController extends BaseController
{
    public function index()
    {
        $pedidoAdicional = PedidoAdicional::with("adicional")
                                ->with("produto_pedido")
                                ->get();

        if(!empty($pedidoAdicional)) {
            return response(["data" => $pedidoAdicional, "message" => "Pedidos adicionais retornados com sucesso"], 200);
        } else {
            return response(["message" => "Nenhum dado encontrado"], 422);
        }
    }
}
