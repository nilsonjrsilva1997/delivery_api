<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpcaoPorcao;

class OpcaoPorcaoController extends Controller
{
    public function index()
    {
        return OpcaoPorcao::all();
    }

    public function show($id)
    {
        $opcaoPorcao = OpcaoPorcao::find($id);
        if(!empty($opcaoPorcao)) {
            return $opcaoPorcao;
        } else {
            return response(['message' => 'Opção de porção não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'unidade' => 'required|integer',
            'valor' => 'required|numeric',
        ]);
        
        return OpcaoPorcao::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'unidade' => 'integer',
            'valor' => 'numeric',
        ]);

        $opcaoPorcao = OpcaoPorcao::find($id);

        if(!empty($opcaoPorcao)) {
            $opcaoPorcao->fill($validatedData);
            $opcaoPorcao->save();
            return $opcaoPorcao;
        } else {
            return response(['message' => 'Opção de porção não encontrado']);
        }
    }

    public function destroy($id)
    {
        $opcaoPorcao = OpcaoPorcao::find($id);

        if(!empty($opcaoPorcao)) {
            OpcaoPorcao::find($id)->delete();
        } else {
            return response(['message' => 'Opção de porção não encontrado']);
        }
    }
}
