<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entregador;

class EntregadorController extends BaseController
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            "codigo" => "required|string|max:255",
            "nome" => "required|string|max:255",
            "unidade_id" => "required|integer|exists:unidades,id"
        ]);

        $entregador = Entregador::create($validatedData);;

        return response(['data' => $entregador, 'message' => 'Entregadores listados com sucesso']);
    }

    public function byUnidade($unidade)
    {
        $entregadores = Entregador::where('unidade_id', $unidade)->get();

        return response(['data' => $entregadores, 'message' => 'Entregadores listados com sucesso']);
    }
}
