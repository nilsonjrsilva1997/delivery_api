<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\PedidoLog;

class PedidoController extends Controller
{
    public function fazerPedido(Request $request)
    {
        // setando valores
        $request["user_id"] = \Auth::id();

        foreach($request->produtos_ids as $produtoId) {
            if(Produto::validateProdutosId($produtoId)) {

            } else {
                return response(["message" => "O id " . $produtoId . " não existe na tabela de produtos"]);
            }

            Pedido::create([]);
        }
        
    }

    /*
    $pedido = Pedido::where(['slug' => $cidade])
        ->with('enderecos')
        ->with('tempo_espera_entrega')
        ->with('horario_funcionamento')
        ->with('sobre_nos')
        ->with('restaurante')
        ->with(['produtos' => function ($query) {
            $query->with('categoria')
                ->with(['adicional' => function ($query) {
                    $query->with('opcoes');
                }]);
        }])
        ->whereHas('restaurante', function ($query) use ($apelido) {
            $query->where(['slug' => $apelido]);
        })->first();


    return $unidade;
    */
}
