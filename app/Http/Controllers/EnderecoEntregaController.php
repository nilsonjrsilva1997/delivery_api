<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnderecoEntrega;
use  App\Http\Services\EnderecoEntregaValidateService;

class EnderecoEntregaController extends BaseController
{
    public function create(Request $request)
    {
        $validateService = new EnderecoEntregaValidateService;
        $validatedData = $request->validate($this->validateService->getValidateRulesCreate());
        $validatedData["user_id"] = \Auth::id();
        return EnderecoEntrega::create($validatedData);
    }

    public function getEnderecosEntregaAuthUser()
    {
        $user = \Auth::user();
        $enderecos = $user->endereco_entrega;

        if(count($enderecos) == 0) {
            return response(["message" => "Usuário não possui endereços de entrega cadastrados"], 422);
        } else {
            return response(["data" => $enderecos, "message" => "Dados retornados com sucesso"], 200);
        }
    }

}
