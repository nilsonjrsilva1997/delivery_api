<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurante;

class RestauranteController extends Controller
{
    public function index()
    {
        return Restaurante::all();
    }

    public function show($id)
    {
        $restaurante = Restaurante::find($id);
        if(!empty($restaurante)) {
            return $restaurante;
        } else {
            return response(['message' => 'Restaurante não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $fileNameToStore = '';

        if($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('foto')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['message' => 'A imagem é obrigatória']);
        }
        
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'foto' => 'required',
            'taxa_entrega' => 'required|numeric',
            'unidadeId' => 'required|integer|exists:unidades,id'
        ]);

        $validatedData['imagem'] = $fileNameToStore;

        return Restaurante::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
            'apelido' => 'string|max:255',
            'foto' => 'date',
            'taxa_entrega' => 'numeric',
            'unidadeId' => 'integer|exists:unidades,id'
        ]);

        $restaurante = Restaurante::find($id);

        if(!empty($restaurante)) {
            $restaurante->fill($validatedData);
            $restaurante->save();
            return $restaurante;
        } else {
            return response(['message' => 'Restaurante não encontrado']);
        }
    }

    public function destroy($id)
    {
        $restaurante = Restaurante::find($id);

        if(!empty($restaurante)) {
            Restaurante::find($id)->delete();
        } else {
            return response(['message' => 'Restaurante não encontrado']);
        }
    }
}
