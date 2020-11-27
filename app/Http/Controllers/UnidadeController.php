<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use Illuminate\Support\Facades\Storage;

class UnidadeController extends Controller
{
    public function index()
    {
        return Unidade::all();
    }

    public function show($id)
    {
        $unidade = Unidade::find($id);
        if(!empty($unidade)) {
            return $unidade;
        } else {
            return response(['message' => 'Unidade não encontrado']);
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

        if($request->hasFile('banner')) {
            $filenameWithExt = $request->file('banner')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            $path = $request->file('banner')->storeAs('public/images', $fileNameToStore2);
        } else {
            return response(['message' => 'A imagem do banner é obrigatória']);
        }
        
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'banner' => 'required',
            'taxa_entrega' => 'required|numeric',
            'restauranteId' => 'required|integer|exists:restaurantes,id',
            'slug' => 'required|string|max:255',
        ]);


        $validatedData['foto'] = $fileNameToStore;
        $validatedData['banner'] = $fileNameToStore2;

        return Unidade::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
            'apelido' => 'string|max:255',
            'foto' => 'date',
            'taxa_entrega' => 'numeric',
            'restauranteId' => 'integer|exists:restaurantes,id',
            'slug' => 'string|max:255',
        ]);

        $unidade = Unidade::find($id);

        $disk = Storage::disk('local');
        $disk->delete('public/images/' . $unidade->banner);

        // if(!empty($unidade)) {
        //     $unidade->fill($validatedData);
        //     $unidade->save();
        //     return $unidade;
        // } else {
        //     return response(['message' => 'Unidade não encontrado']);
        // }
    }

    public function destroy($id)
    {
        $unidade = Unidade::find($id);

        if(!empty($unidade)) {
            Unidade::find($id)->delete();
        } else {
            return response(['message' => 'Unidade não encontrado']);
        }
    }
}
