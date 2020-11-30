<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Http\Services\PedidoValidateService;

class PedidoController extends BaseController
{
    public function index()
    {
        $pedidos = Pedido::with("usuario")
        ->with("enderecos_entrega")
        ->get();

        if(!empty($pedidos)) {
            return response(["data" => $pedidos, "message" => "Pedidos retornados com sucesso"], 200);
        } else {
            return response(["message" => "Nenhum registro encontrado"]);
        }
    }

    public function show($id)
    {
        $pedido = Pedido::with("usuario")
                            ->with("enderecos_entrega")
                            ->where(["id" => $id])
                            ->first();

        if(!empty($pedido)) {
            return response(["data" => $pedido, "message" => "Pedido retornado com sucesso"]);
        } else {
            return response(["message" => "Pedido não encontrado"]);
        }
    }

    public function create(Request $request)
    {
        $pedidoValidateService = new PedidoValidateService;
        $validatedData = $request->validate($pedidoValidateService->getValidateRulesCreate());
        $validatedData["user_id"] = \Auth::id();
        $pedido = Pedido::create($validatedData);
        return response(["data" => $pedido, "message" => "Pedido inserido com sucesso"]);
    }
}
