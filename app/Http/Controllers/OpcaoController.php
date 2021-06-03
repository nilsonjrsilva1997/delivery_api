<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\OpcaoValidateService;
use App\Opcao;

class OpcaoController extends BaseController
{
    public function show($id)
    {
        $opcao = Opcao::where('id', $id)
            ->first();

        if ($opcao) {
            return response(["message" => "Dados retornados com sucesso", "data" => $opcao], 200);
        } else {
            return response(["message" => "Opção não encontrada"], 422);
        }
    }

    public function create(Request $request)
    {
        $opcaoValidate = new OpcaoValidateService;

        $validatedData = $request->validate($opcaoValidate->getValidateRulesCreate());

        $fileNameToStore = '';

        if ($request->hasFile('imagem')) {
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('imagem')->storeAs('public/images', $fileNameToStore);
        }

        $validatedData['imagem'] = $fileNameToStore;

        $opcao = Opcao::create($validatedData);

        return $this->show($opcao->id);
    }
}
