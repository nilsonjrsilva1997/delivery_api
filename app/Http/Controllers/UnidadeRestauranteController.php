<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use App\Unidade;
use App\Restaurante;

class UnidadeRestauranteController extends Controller
{
    public function byApelido($apelido)
    {
        $restaurante = Restaurante::where(['slug' => $apelido])
            ->first();

        if ($restaurante) {
            $unidades = Unidade::where('restaurante_id', $restaurante->id)
                ->with('enderecos')
                ->with('config_entrega')
                ->with('pagamento_unidade')
                ->with('horario_funcionamento')
                ->with('sobre_nos')
                ->with('dados_empresa')
                ->with('produtos')
                ->get();

            $filtradas = array_filter($unidades->toArray(), function ($unidade) {
                $valid = isset($unidade["config_entrega"])
                    && isset($unidade['sobre_nos'])
                    && isset($unidade["enderecos"])
                    && isset($unidade["dados_empresa"])
                    && count($unidade["horario_funcionamento"]) >= 1
                    && count($unidade["pagamento_unidade"]) >= 1
                    && count($unidade["produtos"]) >= 1;

                return $valid;
            });

            $restaurante->unidade = $filtradas;

            return $restaurante;
        } else {
            return $restaurante;
        }
    }

    public function byApelidoCidade($apelido, $cidade)
    {

        $restaurant = Restaurante::where('slug', $apelido)
            ->first();

        if ($restaurant) {
            $unity = Unidade::where('restaurante_id', $restaurant->id)
                ->where('slug', $cidade)
                ->first();

            if ($unity) {
                $query = Unidade::query()
                    ->where('id', $unity->id)
                    ->with('enderecos')
                    ->with('config_entrega')
                    ->with('pagamento_unidade')
                    ->with('pagamento_unidade.forma_pagamento')
                    ->with('horario_funcionamento')
                    ->with('horario_funcionamento.primeiro_periodo')
                    ->with('horario_funcionamento.segundo_periodo')
                    ->with('sobre_nos')
                    ->with('dados_empresa')
                    ->with('restaurante')
                    ->with('entregadores')
                    ->with('produtos')
                    ->with('produtos.categoria')
                    ->with('produtos.adicional')
                    ->with('produtos.adicional.opcoes')
                    ->first();

                $data = $query->toArray();

                $valid = isset($data["config_entrega"])
                    && isset($data['sobre_nos'])
                    && isset($data["enderecos"])
                    && isset($data["dados_empresa"])
                    && count($data["horario_funcionamento"]) >= 1
                    && count($data["pagamento_unidade"]) >= 1
                    && count($data["produtos"]) >= 1;

                if (!$valid) {
                    return response([
                        "data" => null,
                        "message" => "Unidade não encontrada",
                        "error" => true
                    ], 404);
                }

                $filtered = [];

                foreach ($data["produtos"] as $produto) {
                    if ($produto['status'] == 'ATIVO') {
                        if ($produto["estoque"]) {
                            if ($produto["quantidade"] > 0) {
                                $filtered[] = $produto;
                            } else {
                                if (!$produto['esconder_esgotado']) {
                                    $filtered[] = $produto;
                                }
                            }
                        } else {
                            $filtered[] = $produto;
                        }
                    };
                };

                $data['produtos'] = $filtered;

                return $data;
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
