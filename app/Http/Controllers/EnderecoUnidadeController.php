<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnderecoUnidade;

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
            return $endereco;
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
            'complemento' => 'required|string|max:255',
            'unidadeId' => 'required|integer|exists:unidades,id',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ]);

        return EnderecoUnidade::create($validatedData);
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
            'complemento' => 'string|max:255',
            'unidadeId' => 'integer|exists:unidades,id',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ]);

        $endereco = EnderecoUnidade::find($id);

        if (!empty($endereco)) {
            $endereco->fill($validatedData);
            $endereco->save();
            return $endereco;
        } else {
            return response(['message' => 'Endereço não encontrado']);
        }
    }

    public function destroy($id)
    {
        $endereco = EnderecoUnidade::find($id);

        if (!empty($endereco)) {
            EnderecoUnidade::find($id)->delete();
        } else {
            return response(['message' => 'Endereço não encontrado']);
        }
    }
}
