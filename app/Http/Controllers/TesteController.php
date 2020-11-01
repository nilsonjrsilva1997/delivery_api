<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teste;

class TesteController extends Controller
{
    public function index()
    {
        return Teste::all();
    }

    public function show($id)
    {
        $teste = Teste::find($id);
        if(!empty($teste)) {
            return $teste;
        } else {
            return response(['message' => 'Teste não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
        ]);
        
        return Teste::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
        ]);

        $teste = Teste::find($id);

        if(!empty($teste)) {
            $teste->fill($validatedData);
            $teste->save();
            return $teste;
        } else {
            return response(['message' => 'Teste não encontrado']);
        }
    }

    public function destroy($id)
    {
        $teste = Teste::find($id);

        if(!empty($teste)) {
            Teste::find($id)->delete();
        } else {
            return response(['message' => 'Teste não encontrado']);
        }
    }
}
