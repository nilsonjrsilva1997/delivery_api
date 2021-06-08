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
                ->with('pagamento_unidade.forma_pagamento')
                ->with('horario_funcionamento')
                ->with('horario_funcionamento.primeiro_periodo')
                ->with('horario_funcionamento.segundo_periodo')
                ->get();

            $restaurante->unidade = $unidades;

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
                $data = Unidade::query()
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
