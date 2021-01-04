<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoPedido;

class ExtratoController extends Controller
{
    public function getData()
    {
        $produtoPedidos = ProdutoPedido::with('pedido')
                            ->with('pedido')
                            ->with('pedido.usuario')
                            ->with('pedido.usuario.endereco_entrega')
                            ->with('produto')
                            ->with('produto.categoria')
                            ->with('produto.unidade')
                            ->with('produto.unidade.restaurante')
                            ->with('pedido_adicional')
                            ->with('pedido_adicional.pedido_adicional_opcao')
                            ->with('pedido_adicional.adicional')
                            ->with('pedido_adicional.pedido_adicional_opcao.opcoes')
                            ->get();

        return $produtoPedidos;
    }
}
