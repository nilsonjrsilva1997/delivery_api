<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedido;
use DB;

class Estatistica extends Model
{
    public static function receitaDia()
    {
        $receitaPorDia = null;
        $total = null;

        $query = Estatistica::datasPedidos();

        foreach($query as $key => $value) {
            $total = DB::table('pedidos')
            ->join("pivot_produtos_pedidos", function($join) {
                $join->on("pivot_produtos_pedidos.pedido_id", "=", "pedidos.id");
            })
            ->join("pivot_pedidos_adicionais", function($join) {
                $join->on("pivot_pedidos_adicionais.produto_pedido_id", "=", "pivot_produtos_pedidos.id");
            })
            ->join("adicionais", function($join) {
                $join->on("adicionais.id", "=", "pivot_pedidos_adicionais.adicional_id");
            })
            ->join("pivot_pedido_adicional_opcoes", function($join) {
                $join->on("pivot_pedido_adicional_opcoes.pedido_adicional_id", "=", "pivot_pedidos_adicionais.id");
            })
            ->join("opcoes", function($join) {
                $join->on("opcoes.adicional_id", "=", "adicionais.id");
            })
            ->where(DB::raw("SUBSTRING(pedidos.created_at, 1, 10)"), "=", $query[$key]->data_pedido)
            ->where(["user_id" => \Auth::id()])
            ->select(DB::raw("SUM(pivot_produtos_pedidos.valor_atual + adicionais.valor + opcoes.valor) AS receita_dia"))
            ->get();

            $receitaPorDia[] = ["data_pedidos" => $query[$key]->data_pedido, "valor_dia" => $total[0]->receita_dia];
        }

        return $receitaPorDia;
    }

    public static function pedidosPorDia()
    {
        $numPedidosDia = null;

        $query = Estatistica::datasPedidos();

        foreach($query as $key => $value) {
            $numPedidos = DB::table("pedidos")
            ->where(["user_id" => \Auth::id()])
            ->where(DB::raw("SUBSTRING(pedidos.created_at, 1, 10)"), "=", $query[$key]->data_pedido)
            ->select(DB::raw("COUNT(*) as pedidos_dia"))
            ->get();

            $numPedidosDia[] = ["data_pedidos" => $query[$key]->data_pedido, "numero_pedidos" => $numPedidos[0]->pedidos_dia];
        }

        return $numPedidosDia;
    }

    public static function datasPedidos()
    {
        return DB::table("pedidos")
        ->select(DB::raw("distinct SUBSTRING(pedidos.created_at, 1, 10) as data_pedido"))
        ->get();
    }

    public static function pedidosDia()
    {

    }
}
