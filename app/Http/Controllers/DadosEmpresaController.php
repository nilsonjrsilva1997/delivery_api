<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DadosEmpresa;
use App\Http\Services\DadosEmpresaValidateService;

class DadosEmpresaController extends BaseController
{
    public function create(Request $request)
    {
        $serviceValidate = new DadosEmpresaValidateService();

        $validatedData = $request->validate($serviceValidate->getValidateRulesCreate());

        $validatedData["user_id"] = \Auth::id();

        return DadosEmpresa::create($validatedData);
    }
}