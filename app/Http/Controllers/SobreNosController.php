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
        if(!empty($sobreNos)) {
            return $sobreNos;
        } else {
            return response(['message' => 'Sobre nos não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'restaurante_id' => 'required|integer|exists:restaurantes,id',
        ]);

        return SobreNos::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'facebook' => 'url',
            'instagram' => 'url',
            'restaurante_id' => 'integer|exists:restaurantes,id',
        ]);

        $sobreNos = SobreNos::find($id);

        if(!empty($sobreNos)) {
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

        if(!empty($sobreNos)) {
            SobreNos::find($id)->delete();
        } else {
            return response(['message' => 'Sobre nos não encontrado']);
        }
    }
}
