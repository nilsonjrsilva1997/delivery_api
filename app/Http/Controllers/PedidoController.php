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
use App\Unidade;

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

    public function bySlug($unidade)
    {

        $unidade = Unidade::where('slug', $unidade)->first();
        if ($unidade) {

            $pedidos = Pedido::with("produto_pedido")
                ->with("usuario")
                ->with("produto_pedido.produto")
                ->with("produto_pedido.pedido_adicional")
                ->with("produto_pedido.pedido_adicional.pedido_adicional_opcao")
                ->with("enderecos_entrega")
                ->with("cupom_desconto")
                ->where('unidade_id', $unidade->id)
                ->get();

            return $pedidos;
        } else {
            return response(["message" => "Unidade nao encontrada"], 422);
        }
    }

    public function show($id)
    {
        return Pedido::with("produto_pedido")
            ->with("usuario")
            ->with("produto_pedido.produto")
            ->with("produto_pedido.pedido_adicional")
            ->with("produto_pedido.pedido_adicional.pedido_adicional_opcao")
            ->with("enderecos_entrega")
            ->with("cupom_desconto")
            ->where(["id" => $id])
            ->first();

        if (!empty($pedido)) {
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

    public function updateStatusPedido(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status_pedido' => 'in:EM_ANALISE,EM_TRANSITO,REPROVADO,APROVADO,PREPARANDO',
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
            "enderecos_entrega_id" => "required|integer|exists:enderecos_entrega,id",
            "status_pedido" => "required|in:EM_ANALISE",
            "unidade_id" => "required|integer|exists:unidades,id",
            "observacao" => "string",
            "cpf" => "string|max:14"
        ]);

        $unidade = Unidade::findOrFail($validatedData['unidade_id']);

        $cupomDesconto = CupomDesconto::where(["codigo" => $request->cupom_desconto])
            ->first();


        $validatedData["user_id"] = Auth::id();
        $validatedData['taxa_entrega'] = $unidade->taxa_entrega;
        $validatedData["valor_total"] = 0; // calcular depois

        $pedido = Pedido::create($validatedData);

        $valor_total = $unidade->taxa_entrega;

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
                ]);

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
                                    PedidoAdicionalOpcao::create([
                                        "opcao_id" => $opcaoBd->id,
                                        "pedido_adicional_id" => $pedidoAdicional->id,
                                        "quantidade" => $opcao["quantidade"],
                                        "titulo" => $opcaoBd->titulo,
                                        "valor" => $opcaoBd->valor,
                                        "maximo" => $opcaoBd->maximo,
                                        "minimo" => $opcaoBd->minimo,
                                    ]);

                                    $produto_total = $produto_total + ($opcaoBd->valor * $opcao["quantidade"]);
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

                $valor_total = $valor_total + $produto_total;
            } else {
                return response(["message" => "Produto nao encontrado, ID do produto: " . $produto["id"]], 422);
            }
        }

        $pedido->valor_total = $valor_total;
        $pedido->save();

        return $this->show($pedido->id);
    }
}
