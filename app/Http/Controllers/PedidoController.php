<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\PedidoValidateService;
use App\Pedido;
use App\Produto;
use App\ProdutoPedido;
use App\Adicional;
use App\PedidoAdicional;
use App\Opcao;
use App\PedidoAdicionalOpcao;

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

    public function fazerPedido(Request $request)
    {
        // criando pedido
        $validatedData = $request->validate([
            "enderecos_entrega_id" => "required|integer|exists:enderecos_entrega,id",
        ]);

        $validatedData["user_id"] = \Auth::id();
        $validatedData["valor_total"] = 12; // calcular depois


        $pedido = Pedido::create($validatedData);

        // criando produto pedido
        foreach($request->produtos as $produto) {
            $produtoBd = Produto::find($produto["id"]);

            $produtoPedido = null;

            if(!empty($produtoBd)) {
                // criando pedido/produto
                $produtoPedido = ProdutoPedido::create([
                    "pedido_id" => $pedido->id,
                    "quantidade" => $produto["quantidade"],
                    "produto_id" => $produtoBd->id,
                    "valor_atual" => $produtoBd->valor_atual,
                    "nome" => $produtoBd->nome,
                    "descricao" => $produtoBd->descricao,
                ]);

                // verifica se pedido tem adicional
                if(count($produto["adicional"]) > 0) {
                    foreach($produto["adicional"] as $adicional) {
                        $adicionalBd = Adicional::find($adicional["id"]);

                        if(!empty($adicional)) {
                            $pedidoAdicional = PedidoAdicional::create([
                                "adicional_id" => $adicionalBd->id,
                                "produto_pedido_id" => $produtoPedido->id,
                                "titulo" => $adicionalBd->titulo,
                            ]);

                            foreach($adicional["opcoes_ids"] as $opcaoId) {
                                $opcaoBd = Opcao::find($opcaoId);
                                if(!empty($opcaoBd)) {
                                    PedidoAdicionalOpcao::create([
                                        "pedido_adicional_id" => $pedidoAdicional->id,
                                        "opcao_id" => $opcaoBd->id,
                                    ]);
                                } else {
                                    return response(["message" => "Opção não encontrada"], 422);
                                }
                            }
                        } else {
                            return response(["message" => "Adicional não encontrado"], 422);
                        }
                    }
                }

            } else {
                return response(["message" => "Produto nao encontrado, ID do produto: " . $produto["id"]], 422);
            }
        }

        return response(["message" => "Pedido feito com sucesso"], 200);
    }
}
