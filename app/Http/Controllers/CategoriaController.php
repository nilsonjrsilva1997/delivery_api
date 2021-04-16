<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;
use App\Unidade;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function indexBySlug($slug)
    {
        $unity = Unidade::where('slug', $slug)->first();

        if ($unity) {
            $categories = Categoria::where('unidade_id', $unity->id)
                ->with('produtos')
                ->with('produtos.adicional')
                ->with('produtos.adicional.opcoes')
                ->get();


            return $categories;
        }

        return [];
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        if (!empty($categoria)) {
            return $categoria;
        } else {
            return response(['message' => 'Categoria não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'unidade_id' => 'required|integer|exists:unidades,id'
        ]);

        return Categoria::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
        ]);

        $categoria = Categoria::find($id);

        if (!empty($categoria)) {
            $categoria->fill($validatedData);
            $categoria->save();
            return $categoria;
        } else {
            return response(['message' => 'Categoria não encontrado']);
        }
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if (!empty($categoria)) {
            Categoria::find($id)->delete();
        } else {
            return response(['message' => 'Categoria não encontrado']);
        }
    }
}
