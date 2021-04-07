<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoPedido;

class ProdutoPedidoController extends BaseController
{
    public function index()
    {
        $produtoPedido = ProdutoPedido::with("produto")
            ->with("pedido")
            ->get();

        if (!empty($produtoPedido)) {
            return response(["data" => $produtoPedido, "message" => "Dados retornados com sucesso"]);
        } else {
            return response(["message" => "Nenhum Produto/pedido cadastrado"]);
        }
    }

    public function show($id)
    {
        $produtoPedido = ProdutoPedido::with("produto")
            ->with("pedido")
            ->where(["id" => $id])
            ->get();

        if (!empty($produtoPedido)) {
            return response(["data" => $produtoPedido, "message" => "Dados retornados com sucesso"]);
        } else {
            return response(["message" => "Produto/pedido não encontrado"]);
        }
    }
}
