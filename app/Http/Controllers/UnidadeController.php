<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;

class UnidadeController extends Controller
{
    public function index()
    {
        return Unidade::all();
    }

    public function show($id)
    {
        $unidade = Unidade::find($id);
        if (!empty($unidade)) {
            return $unidade;
        } else {
            return response(['message' => 'Unidade não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $fileNameToStore = '';

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('foto')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['message' => 'A imagem é obrigatória']);
        }


        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'foto' => 'required',
            'taxa_entrega' => 'required|numeric',
            'restauranteId' => 'required|integer|exists:restaurantes,id'
        ]);

        $validatedData['imagem'] = $fileNameToStore;

        return Unidade::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
            'slug' => 'string|max:255',
            'foto' => 'date',
            'taxa_entrega' => 'numeric',
            'restauranteId' => 'integer|exists:restaurantes,id'
        ]);

        $unidade = Unidade::find($id);

        if (!empty($unidade)) {
            $unidade->fill($validatedData);
            $unidade->save();
            return $unidade;
        } else {
            return response(['message' => 'Unidade não encontrado']);
        }
    }

    public function destroy($id)
    {
        $unidade = Unidade::find($id);

        if (!empty($unidade)) {
            Unidade::find($id)->delete();
        } else {
            return response(['message' => 'Unidade não encontrado']);
        }
    }
}
