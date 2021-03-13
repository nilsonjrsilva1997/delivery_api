<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Services\PermissaoValidateService;
use Illuminate\Http\Request;
use App\Permissao;

class PermissaoController extends BaseController
{
    public function create(Request $request)
    {
        $permissaoValidate = new PermissaoValidateService;
        $validatedData = $request->validate($permissaoValidate->getValidateRulesCreate());

        $numPermissao = \App\Permissao::where(['user_id' => $request->user_id, 'unidade_id' => $request->unidade_id])->count();
        
        if($numPermissao != 0) {
            return response(['message' => 'Usuário já tem permissão nessa unidade'], 422);
        } else {
            return response(['data' => Permissao::create($validatedData), 'message' => 'Dados inseridos com sucesso']);
        }
        
    }
}
