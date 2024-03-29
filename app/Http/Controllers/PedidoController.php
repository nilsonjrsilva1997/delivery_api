<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Services\PedidoValidateService;
use App\Pedido;
use App\Produto;
use App\ProdutoPedido;
use App\Adicional;
use App\PedidoAdicional;
use App\Opcao;
use App\PedidoAdicionalOpcao;
use App\CupomDesconto;
use App\Restaurante;
use App\Unidade;
use Carbon\Carbon;

class PedidoController extends BaseController
{

    public function index()
    {
        $pedidos = Pedido::with("produto_pedido")
            ->with("usuario")
            ->with("produto_pedido.produto")
            ->with("produto_pedido.pedido_adicional")
            ->with("produto_pedido.pedido_adicional.pedido_adicional_opcao")
            ->with("enderecos_entrega")
            ->with("cupom_desconto")
            ->get();

        return $pedidos;
    }

    public function bySlug(Request $request, $restaurante, $unidade)
    {
        $restaurante = Restaurante::where('slug', $restaurante)
            ->first();
        $unidade = Unidade::where('slug', $unidade)
            ->first();

        if ($unidade) {

            $pedidos = Pedido::with("produto_pedido")
                ->with("usuario")
                ->with('entregador')
                ->with("produto_pedido.produto")
                ->with("produto_pedido.pedido_adicional")
                ->with("produto_pedido.pedido_adicional.pedido_adicional_opcao")
                ->with("enderecos_entrega")
                ->with("cupom_desconto")
                ->with('forma_pagamento')
                ->where('unidade_id', $unidade->id);

            if ($request->completed) {
                $pedidos = $pedidos->where('status_pedido', 'FINALIZADO');
            }

            if (!$request->get_all) {
                $data_inicial = Carbon::now()->startOfDay()->toDateTimeString();
                $data_final = Carbon::now()->endOfDay()->toDateTimeString();
                $pedidos = $pedidos->whereBetween('created_at', [$data_inicial, $data_final]);
            }

            $pedidos = $pedidos->get();


            return $pedidos;
        } else {
            return response(["message" => "Unidade nao encontrada"], 422);
        }
    }

    public function show($id)
    {
        $pedido = Pedido::with("produto_pedido")
            ->with('unidade')
            ->with('unidade.dados_empresa')
            ->with('unidade.config_entrega')
            ->with('unidade.sobre_nos')
            ->with("usuario")
            ->with('entregador')
            ->with("produto_pedido.produto")
            ->with("produto_pedido.pedido_adicional")
            ->with("produto_pedido.pedido_adicional.pedido_adicional_opcao")
            ->with("enderecos_entrega")
            ->with("cupom_desconto")
            ->with('forma_pagamento')
            ->where(["id" => $id])
            ->first();

        if ($pedido) {
            return response(["data" => $pedido, "message" => "Pedido retornado com sucesso"]);
        } else {
            return response(["message" => "Pedido não encontrado"]);
        }
    }

    public function create(Request $request)
    {
        $pedidoValidateService = new PedidoValidateService;
        $validatedData = $request->validate($pedidoValidateService->getValidateRulesCreate());
        $validatedData["user_id"] = Auth::id();
        $pedido = Pedido::create($validatedData);
        return response(["data" => $pedido, "message" => "Pedido inserido com sucesso"]);
    }

    public function updateEntregador(Request $request, $id)
    {
        $validatedData = $request->validate([
            'entregador_id' => 'required|integer|exists:entregadores,id'
        ]);

        $pedido = Pedido::where('id', $id)
            ->first();

        if (!empty($pedido)) {
            $pedido->fill($validatedData);
            $pedido->save();

            return $pedido;
        } else {
            return response(['message' => 'Pedido não encontrado']);
        }
    }

    public function updateStatusPedido(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status_pedido' => 'in:EM_ANALISE,REPROVADO,APROVADO,PREPARANDO,ESPERANDO_RETIRADA,EM_TRANSITO,FINALIZADO',
        ]);

        $pedido = Pedido::find($id);

        if (!empty($pedido)) {
            $pedido->fill($validatedData);
            $pedido->save();

            return $pedido;
        } else {
            return response(['message' => 'Pedido não encontrado']);
        }
    }

    public function fazerPedido(Request $request)
    {
        // criando pedido
        $validatedData = $request->validate([
            "status_pedido" => "required|in:EM_ANALISE",
            "cpf" => "",
            "observacao" => "",

            "taxa_entrega" => "required|numeric",
            "subtotal" => "required|numeric",
            "desconto" => "required|numeric",
            "subtotal_desconto" => "required|numeric",
            "valor_total" => "required|numeric",
            "troco" => "",

            "enderecos_entrega_id" => "required|integer|exists:enderecos_entrega,id",
            "unidade_id" => "required|integer|exists:unidades,id",
            "cupom_desconto_id" => "integer|exists:cupom_descontos,id",
            "entregador_id" => "integer|exists:entregadores,id",
            "forma_pagamento_id" => 'integer|exists:forma_pagamentos,id',
        ]);

        $validatedData["user_id"] = Auth::id();

        $pedido = Pedido::create($validatedData);

        // criando produto pedido
        foreach ($request->produtos as $produto) {
            $produtoBd = Produto::find($produto["id"]);

            $produto_total = 0;

            if (!empty($produtoBd)) {
                // criando pedido/produto
                $produtoPedido = ProdutoPedido::create([
                    "pedido_id" => $pedido->id,
                    "produto_id" => $produtoBd->id,
                    "nome" => $produtoBd->nome,
                    "quantidade" => $produto["quantidade"],
                    "valor_anterior" => $produtoBd->valor_anterior,
                    "valor_atual" => $produtoBd->valor_atual,
                    "valor_total" => $produtoBd->valor_atual * $produto["quantidade"],
                    "observacao" => $produto['observacao'],
                ]);

                if ($produtoBd->estoque) {
                    $produtoBd->quantidade = $produto->quantidade - 1;
                    $produtoBd->save();
                }

                $produto_total = $produto_total + $produtoBd->valor_atual;

                // verifica se pedido tem adicional
                if (count($produto["adicional"]) > 0) {
                    foreach ($produto["adicional"] as $adicional) {

                        $adicionalBd = Adicional::find($adicional["id"]);

                        if (!empty($adicional)) {
                            $pedidoAdicional = PedidoAdicional::create([
                                "adicional_id" => $adicionalBd->id,
                                "produto_pedido_id" => $produtoPedido->id,
                                "titulo" => $adicionalBd->titulo,
                                "valor" => $adicionalBd->valor,
                            ]);

                            $produto_total = $produto_total + $adicionalBd->valor;

                            foreach ($adicional["opcoes"] as $opcao) {
                                $opcaoBd = Opcao::find($opcao["id"]);

                                if (!empty($opcaoBd)) {
                                    $adicional_total = $opcaoBd->valor * $opcao["quantidade"];

                                    PedidoAdicionalOpcao::create([
                                        "opcao_id" => $opcaoBd->id,
                                        "pedido_adicional_id" => $pedidoAdicional->id,
                                        "quantidade" => $opcao["quantidade"],
                                        "titulo" => $opcaoBd->titulo,
                                        "valor" => $opcaoBd->valor,
                                        "valor_total" => $adicional_total,
                                        "maximo" => $opcaoBd->maximo,
                                        "minimo" => $opcaoBd->minimo,
                                    ]);


                                    $produto_total = $produto_total + $adicional_total;
                                } else {
                                    return response(["message" => "Opção não encontrada"], 422);
                                }
                            }
                        } else {
                            return response(["message" => "Adicional não encontrado"], 422);
                        }
                    }
                }

                $produto_total = $produto_total * $produto['quantidade'];

                $produtoPedido->valor_total = $produto_total;
                $produtoPedido->save();
            } else {
                return response(["message" => "Produto nao encontrado, ID do produto: " . $produto["id"]], 422);
            }
        }


        return $this->show($pedido->id);
    }
}
