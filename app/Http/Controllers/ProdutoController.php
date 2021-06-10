<?php

namespace App\Http\Controllers;

use App\Adicional;
use App\Http\Services\ProdutoValidateService;
use App\Opcao;
use Illuminate\Http\Request;
use App\Produto;
use Auth;

class ProdutoController extends BaseController
{
    public function index()
    {

        $produto = Produto::query()
            ->with('categoria')
            ->with('adicional')
            ->with('adicional.opcoes');

        return response(["message" => "Dados retornados com sucesso", "data" => $produto], 200);
    }

    public function show($id)
    {
        $produto = Produto::where('id', $id)
            ->with('categoria')
            ->with('adicional')
            ->with('adicional.opcoes')
            ->first();

        if ($produto) {
            return response(["message" => "Dados retornados com sucesso", "data" => $produto], 200);
        } else {
            return response(["message" => "Produto não encontrado"], 422);
        }
    }

    public function create(Request $request)
    {
        $produtoValidate = new ProdutoValidateService;

        //validando dados
        $validatedData = $request->validate($produtoValidate->getValidateRulesCreate());

        $validatedData['promocao'] = $validatedData['promocao'] == 'true' ? true : false;

        $fileNameToStore = '';

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('foto')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['foto' => 'A foto é obrigatória'], 422);
        }

        $validatedData['foto'] = $fileNameToStore;

        $produto = Produto::create($validatedData);

        return $this->show($produto->id);
    }

    public function update(Request $request, $id)
    {
        $produtoValidate = new ProdutoValidateService;

        $validatedData = $request->validate($produtoValidate->getValidateRulesUpdate());

        $fileNameToStore = '';

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('foto')->storeAs('public/images', $fileNameToStore);
        }

        if ($fileNameToStore !== '') {
            $validatedData['foto'] = $fileNameToStore;
        }

        $produto = Produto::where('id', $id)->first();

        if ($produto) {
            $produto->fill($validatedData);
            $produto->save();
            return $this->show($produto->id);
        } else {
            return response(['message' => 'Produto não encontrado']);
        }
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);

        if (!empty($produto)) {
            $permissao = \App\Helpers\Helper::getPermissoes(Auth::id(), $produto->unidade_id);
            if ($permissao == 'ADMINISTRADOR' || $permissao == 'GERENTE') {
                Produto::find($id)->delete();
            } else {
                return response(['message' => 'Usuário não possui permissão para executar está ação'], 401);
            }
        } else {
            return response(['message' => 'Produto não encontrado']);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $validatedData = $request->validate([
            "status" => "required|in:ATIVO,INATIVO",
        ]);

        $produto = Produto::where('id', $id)
            ->first();

        if ($produto) {
            $produto->fill($validatedData);
            $produto->save();

            return response([
                "data" => $produto,
                "message" => "Status atualizado com sucesso",
                "error" => false,
            ]);
        } else {
            return response([
                "data" => null,
                "message" => "Produto não encontrado",
                "error" => true,
            ]);
        }
    }

    public function duplicate(Request $request)
    {
        $validatedData = $request->validate([
            "produto_id" => "integer|exists:produtos,id",
        ]);

        $produto = Produto::where('id', $validatedData["produto_id"])
            ->with('categoria')
            ->with('adicional')
            ->with('adicional.opcoes')
            ->first();

        if ($produto) {

            $array = $produto->toArray();

            $mirror = $array;

            unset($mirror['id']);
            unset($mirror['adicional']);
            unset($mirror['categoria']);
            unset($mirror['created_at']);
            unset($mirror['updated_at']);

            $clone = Produto::create($mirror);


            foreach ($array['adicional'] as $adicional) {

                $adicionalMirror = $adicional;

                $adicionalMirror["produto_id"] = $clone->id;

                $cloneAdicional = Adicional::create($adicionalMirror);

                foreach ($adicional['opcoes'] as $opcao) {

                    $opcaoMirror = $opcao;

                    $opcaoMirror['adicional_id'] = $cloneAdicional->id;

                    $opcao = Opcao::create($opcaoMirror);
                }
            }

            return $this->show($clone->id);
        } else {
            return response([
                "data" => null,
                "message" => "Produto não encontrado",
                "error" => true,
            ]);
        }
    }
}
