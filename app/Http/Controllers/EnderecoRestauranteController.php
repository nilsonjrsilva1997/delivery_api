<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnderecoRestaurante;

class EnderecoRestauranteController extends Controller
{
    public function index()
    {
        return EnderecoRestaurante::all();
    }

    public function show($id)
    {
        $endereco = EnderecoRestaurante::find($id);
        if(!empty($endereco)) {
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
            'restaurante_id' => 'required|integer|exists:restaurantes,id',
        ]);

        return EnderecoRestaurante::create($validatedData);
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
            'restaurante_id' => 'integer|exists:restaurantes,id',
        ]);

        $endereco = EnderecoRestaurante::find($id);

        if(!empty($endereco)) {
            $endereco->fill($validatedData);
            $endereco->save();
            return $endereco;
        } else {
            return response(['message' => 'Endereço não encontrado']);
        }
    }

    public function destroy($id)
    {
        $endereco = EnderecoRestaurante::find($id);

        if(!empty($endereco)) {
            EnderecoRestaurante::find($id)->delete();
        } else {
            return response(['message' => 'Endereço não encontrado']);
        }
    }
}
