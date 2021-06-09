<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnderecoUnidade;
use Auth;

class EnderecoUnidadeController extends Controller
{
    public function index()
    {
        return EnderecoUnidade::all();
    }

    public function show($id)
    {
        $endereco = EnderecoUnidade::find($id);

        if (!empty($endereco)) {
            $permissao = \App\Helpers\Helper::getPermissoes(Auth::id(), $endereco->unidade_id);

            if ($permissao == 'ADMINISTRADOR' || $permissao == 'GERENTE') {
                return $endereco;
            } else {
                return response(['message' => 'Usuário não possui permissão para executar esta ação'], 401);
            }
        } else {
            return response(['message' => 'Endereço não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'cep' => 'required|string|max:9',
            'estado' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'rua' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'complemento' => '',
            'unidade_id' => 'required|integer|exists:unidades,id',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ]);

        $endereco = EnderecoUnidade::create($validatedData);
        return response(['data' => $endereco, 'message' => 'Endereço criado com sucesso']);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cep' => 'string|max:9',
            'estado' => 'string|max:255',
            'cidade' => 'string|max:255',
            'bairro' => 'string|max:255',
            'rua' => 'string|max:255',
            'numero' => 'string|max:255',
            'complemento' => '',
            'unidade_id' => 'integer|exists:unidades,id',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ]);

        $endereco = EnderecoUnidade::find($id);

        if (!empty($endereco)) {
            $permissao = \App\Helpers\Helper::getPermissoes(Auth::id(), $endereco->unidade_id);

            if ($permissao == 'ADMINISTRADOR' || $permissao == 'GERENTE') {
                $endereco->fill($validatedData);
                $endereco->save();
                return response(['data' => $endereco, 'message' => 'Endereço atualizado com sucesso']);
            } else {
                return response(['message' => 'Usuário não possui permissão para executar esta ação'], 401);
            }
        } else {
            return response(['message' => 'Endereço não encontrado']);
        }
    }

    public function destroy($id)
    {
        $endereco = EnderecoUnidade::find($id);

        if (!empty($endereco)) {
            $permissao = \App\Helpers\Helper::getPermissoes(Auth::id(), $endereco->unidade_id);

            if ($permissao == 'ADMINISTRADOR' || $permissao == 'GERENTE') {
                if ($endereco->delete()) {
                    return response(['message' => 'Endereço deletado com sucesso']);
                }
            } else {
                return response(['message' => 'Usuário não possui permissão para executar esta ação'], 401);
            }
        } else {
            return response(['message' => 'Endereço não encontrado']);
        }
    }
}
