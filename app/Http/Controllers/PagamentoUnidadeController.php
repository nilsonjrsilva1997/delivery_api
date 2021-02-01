<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagamentoUnidade;

class PagamentoUnidadeController extends Controller
{
    public function associar(Request $request)
    {
        $validatedData = $request->validate([
            'unidade_id' => 'required|integer|exists:unidades,id',
            'forma_pagamento_id' => 'required|integer|exists:forma_pagamentos,id',
        ]);

        return PagamentoUnidade::create($validatedData);
    }

    public function desassociar(Request $request)
    {
        $validatedData = $request->validate([
            'unidade_id' => 'required|integer|exists:unidades,id',
            'forma_pagamento_id' => 'required|integer|exists:forma_pagamentos,id',
        ]);

        $pagamentoUnidade = PagamentoUnidade::where('unidade_id', '=', $validatedData['unidade_id'])
        ->where('forma_pagamento_id', '=', $validatedData['forma_pagamento_id'])
        ->first();

        if(!empty($pagamentoUnidade)) {
            if($pagamentoUnidade->delete()) {
                return response(['message' => 'Forma de pagamento da unidade removida com sucesso']);
            }
        } else {
            return response(['message' => 'Forma de pagamento na unidade nao encontrada'], 422);
        }
    }
}
