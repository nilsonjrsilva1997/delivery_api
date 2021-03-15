<?php

namespace App\Http\Controllers;

use App\Http\Services\ProdutoValidateService;
use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends BaseController
{
    public function index()
    {

        $produto = Produto::with('categoria')
            ->with('adicional')
            ->with('opcao')
            ->get();

        return response(["message" => "Dados retornados com sucesso", "data" => $produto], 200);
    }

    public function show($id)
    {
        $produto = Produto::find($id)
            ->with('categoria')
            ->with('adicional')
            ->with('opcao')
            ->get();

        if (!empty($produto)) {
            return response(["message" => "Dados retornados com sucesso", "data" => $produto], 200);
        } else {
            return reponse(["message" => "Produto não encontrado"], 422);
        }
    }

    public function create(Request $request)
    {
        $produtoValidate = new ProdutoValidateService;

        //validando dados
        $validatedData = $request->validate($produtoValidate->getValidateRulesCreate());

        $fileNameToStore = '';

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('foto')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['foto' => 'A foto é obrigatória']);
        }

        $validatedData['foto'] = $fileNameToStore;

        return response(['data' => Produto::create($validatedData), 'message' => 'Dados inseridos com sucesso']);
    }

    public function update(Request $request, $id)
    {
        $fileNameToStore = '';

        if ($request->hasFile('imagem')) {
            return 'entrou';
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('imagem')->storeAs('public/images', $fileNameToStore);
        }

        $validatedData = $request->validate([
            'nome' => 'string|max:255',
            'categoria_id' => 'integer|exists:categoria,id',
            'marca_id' => 'integer|exists:marcas,id',
            'tipo_unidade_id' => 'integer|exists:tipo_unidade,id',
            'medida' => 'string|max:255',
            'preco_uni_venda' => 'numeric',
            'preco_uni_compra' => 'numeric',
            'qtd_estoque' => 'integer',
        ]);

        return $fileNameToStore;

        if ($fileNameToStore != '') {
            $validatedData['imagem'] = $fileNameToStore;
        }

        $produto = Produto::find($id);

        if (!empty($produto)) {
            $permissao = \App\Helpers\Helper::getPermissoes(\Auth::id(), $produto->unidade_id);
            if ($permissao == 'ADMINISTRADOR' || $permissao == 'GERENTE') {
                $produto->fill($validatedData);
                $produto->save();
                return $produto;
            } else {
                return response(['message' => 'Usuário não possui permissão para executar está ação'], 401);
            }
        } else {
            return response(['message' => 'Produto não encontrado']);
        }
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);

        if (!empty($produto)) {
            $permissao = \App\Helpers\Helper::getPermissoes(\Auth::id(), $produto->unidade_id);
            if ($permissao == 'ADMINISTRADOR' || $permissao == 'GERENTE') {
                Produto::find($id)->delete();
            } else {
                return response(['message' => 'Usuário não possui permissão para executar está ação'], 401);
            }
        } else {
            return response(['message' => 'Produto não encontrado']);
        }
    }
}
