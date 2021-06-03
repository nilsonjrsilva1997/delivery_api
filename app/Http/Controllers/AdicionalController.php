<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adicional;
use App\Http\Services\AdicionalValidateService;

class AdicionalController extends BaseController
{

    public function show($id)
    {
        $produto = Adicional::where('id', $id)
            ->with('opcoes')
            ->first();

        if ($produto) {
            return response(["message" => "Dados retornados com sucesso", "data" => $produto], 200);
        } else {
            return response(["message" => "Adicional não encontrado"], 422);
        }
    }

    public function create(Request $request)
    {
        $adicionalValidate = new AdicionalValidateService;

        $validatedData = $request->validate($adicionalValidate->getValidateRulesCreate());

        $adicional = Adicional::create($validatedData);

        return $this->show($adicional->id);
    }
}
