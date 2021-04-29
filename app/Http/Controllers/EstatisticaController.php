<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Estatistica;
use App\Restaurante;
use App\Unidade;
use App\User;
use Carbon\Carbon;

class EstatisticaController extends Controller
{
    public function receitaDia(Request $request, $restaurante, $unidade)
    {

        $restaurante = Restaurante::where('slug', $restaurante)
            ->first();

        if ($restaurante) {
            $unidade = Unidade::where('slug', $unidade)
                ->where('restaurante_id', $restaurante->id)
                ->first();

            if ($unidade) {

                $data_inicial = Carbon::now()->startOfDay()->toDateTimeString();
                $data_final = Carbon::now()->endOfDay()->toDateTimeString();

                if ($request->periodo === '0') {
                    if ($request->data_inicial && $request->data_final) {
                        $data_inicial = Carbon::createFromFormat('Y-m-d', $request->data_inicial)
                            ->startOfDay()
                            ->toDateTimeString();

                        $data_final = Carbon::createFromFormat('Y-m-d', $request->data_final)
                            ->endOfDay()
                            ->toDateTimeString();
                    }
                } else {
                    switch ($request->periodo) {
                        case '1':
                            $data_inicial = Carbon::now()->startOfDay()->toDateTimeString();
                            $data_final = Carbon::now()->endOfDay()->toDateTimeString();
                            break;
                        case '7':
                            $data_inicial = Carbon::now()->subDays(7)->startOfDay()->toDateTimeString();
                            $data_final = Carbon::now()->endOfDay()->toDateTimeString();
                            break;
                        case '30':
                            $data_inicial = Carbon::now()->subDays(30)->startOfDay()->toDateTimeString();
                            $data_final = Carbon::now()->endOfDay()->toDateTimeString();
                            break;
                    }
                }


                $pedidos = Pedido::with('cupom_desconto')
                    ->with('forma_pagamento')
                    ->with('entregador')
                    ->where('unidade_id', $unidade->id)
                    ->whereBetween('created_at', [$data_inicial, $data_final])
                    ->get();

                $receita = array_reduce($pedidos->toArray(), function ($prev, $curr) use ($request) {
                    $valor = $request->taxa_entrega === "true" ? $curr['valor_total'] : $curr['subtotal_desconto'];

                    return $prev + $valor;
                }, 0);

                $ticket_medio = 0;

                if (count($pedidos) > 0) {
                    $ticket_medio = $receita / count($pedidos);
                }

                $pedido_cupom = $pedidos->filter(function ($pedido) {
                    return $pedido->cupom_desconto ? true : false;
                });

                $pedido_cupom_qtd = 0;

                if (count($pedidos) > 0 && count($pedido_cupom) > 0) {
                    $pedido_cupom_qtd = count($pedido_cupom) / count($pedidos) * 100;
                }

                $pedidos_agrupados = $pedidos->groupBy(function ($pedido) use ($request) {
                    return Carbon::parse($pedido->created_at)
                        ->format($request->agrupar);
                });

                $pedido_agrupados_hora = $pedidos->groupBy(function ($pedido) use ($request) {
                    return Carbon::parse($pedido->created_at)
                        ->format($request->agrupar . ' H:00');
                });

                $receita_agrupado = array_map(function ($pedidos)  use ($request) {
                    $soma = array_reduce($pedidos, function ($prev, $curr) use ($request) {
                        $valor = $request->taxa_entrega === "true" ? $curr['valor_total'] : $curr['subtotal_desconto'];

                        return $prev + $valor;
                    }, 0);

                    return $soma;
                }, $pedidos_agrupados->toArray());

                $pedidos_pagamento = $pedidos->groupBy(function ($pedido) {
                    return $pedido->forma_pagamento->nome;
                });

                $clientes_agrupados = $pedidos->groupBy(function ($pedido) {
                    return $pedido->user_id;
                });

                $clientes_novos = array_filter($clientes_agrupados->toArray(), function ($pedidos) {
                    return count($pedidos) === 1;
                });

                $clientes_recorrentes = array_filter($clientes_agrupados->toArray(), function ($pedidos) {
                    return count($pedidos) > 1;
                });

                $cupons_agrupado = $pedido_cupom->groupBy(function ($pedido) use ($request) {
                    return Carbon::parse($pedido->created_at)
                        ->format($request->agrupar);
                });

                $clientes = [
                    'Novos' => $clientes_novos,
                    'Recorrentes' => $clientes_recorrentes
                ];

                $entregadores = $pedidos->filter(
                    function ($pedido) {
                        return $pedido->entregador ? true : false;
                    }
                )->groupBy(function ($pedido) {
                    return $pedido->entregador->nome;
                });

                return response(['data' => [
                    'pedidos' => $pedidos,
                    'pedido_cupom' => $pedido_cupom_qtd,
                    'quantidade_pedidos' => count($pedidos),
                    'receita' => $receita,
                    'ticket_medio' => $ticket_medio,
                    'data_inicial' => $data_inicial,
                    'data_final' => $data_final,
                    'agrupados' => $pedidos_agrupados,
                    'agrupados_hora' => $pedido_agrupados_hora,
                    'receita_agrupados' => $receita_agrupado,
                    'clientes' => $clientes,
                    'pedidos_pagamento' => $pedidos_pagamento,
                    'pedido_cupons_agrupado' => $cupons_agrupado,
                    'entregadores' => $entregadores
                ], 'message' => 'Listado com sucesso']);
            } else {
                return response(['data' => null, 'message' => 'Unidade não encontrada'], 404);
            }
        } else {
            return response(['data' => null, 'message' => 'Restaurante não encontrado'], 404);
        }
    }

    public function pedidosPorDia()
    {
        return Estatistica::pedidosPorDia();
    }
}
