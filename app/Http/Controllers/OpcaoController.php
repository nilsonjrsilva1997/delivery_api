<?php

namespace App\Http\Controllers;

use App\Http\Services\OpcaoValidateService;
use Illuminate\Http\Request;
use App\Opcao;

class OpcaoController extends BaseController
{
    public function create(Request $request)
    {
        $opcaoValidate = new OpcaoValidateService;

        //validando dados
        $validatedData = $request->validate($opcaoValidate->getValidateRulesCreate());

        $fileNameToStore = '';

        if($request->hasFile('imagem')) {
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('imagem')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['imagem' => 'A imagem é obrigatória']);
        }
        
        $validatedData['imagem'] = $fileNameToStore;

        return response(['data' => Opcao::create($validatedData), 'message' => 'Dados inseridos com sucesso']);
    }
}