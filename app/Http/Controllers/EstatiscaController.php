<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class EstatiscaController extends Controller
{
    public function receitaDia()
    {
        // terminar relatorio
        $receitaProdutos = 0;
        $today = date("Y-m-d");

        $receitas = Pedido::with("produto_pedido")
                ->with("produto_pedido.produto")
                ->get();

        foreach($receitas as $receita) {

            return $receita;
            if(count($receita->produto_pedido) == 0) {
                $receitaProdutos += 0;
            } else {
                foreach($receita->produto_pedido as $produtos) {
                    $receitaProdutos += $produtos->valor_atual;
                }
            }
        }

        return $receitaProdutos;
    }
}
