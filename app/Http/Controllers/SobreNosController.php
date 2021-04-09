<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SobreNos;

class SobreNosController extends Controller
{
    public function index()
    {
        return SobreNos::all();
    }

    public function show($id)
    {
        $sobreNos = SobreNos::find($id);
        if (!empty($sobreNos)) {
            return $sobreNos;
        } else {
            return response(['message' => 'Sobre nos não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'descricao' => 'required|string',
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'unidade_id' => 'required|integer|exists:unidades,id',
        ]);

        return SobreNos::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'descricao' => 'string',
            'facebook' => 'url',
            'instagram' => 'url',
            'unidade_id' => 'integer|exists:unidades,id',
        ]);

        $sobreNos = SobreNos::find($id);

        if (!empty($sobreNos)) {
            $sobreNos->fill($validatedData);
            $sobreNos->save();
            return $sobreNos;
        } else {
            return response(['message' => 'Sobre nos não encontrado']);
        }
    }

    public function destroy($id)
    {
        $sobreNos = SobreNos::find($id);

        if (!empty($sobreNos)) {
            SobreNos::find($id)->delete();
        } else {
            return response(['message' => 'Sobre nos não encontrado']);
        }
    }
}
