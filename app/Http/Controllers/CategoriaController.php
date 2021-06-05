<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;
use App\Restaurante;
use App\Unidade;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function indexBySlug($restaurante, $unidade)
    {
        $restaurant = Restaurante::where('slug', $restaurante)
            ->first();
        $unity = Unidade::where('restaurante_id', $restaurant->id)
            ->where('slug', $unidade)
            ->first();

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

        $categoria = Categoria::where('id', $id)
            ->with('produtos')
            ->with('produtos.adicional')
            ->with('produtos.adicional.opcoes')
            ->first();

        if ($categoria) {
            return $categoria;
        } else {
            return response(['message' => 'Categoria não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => '',
            'unidade_id' => 'required|integer|exists:unidades,id'
        ]);

        $fileNameToStore = '';

        if ($request->hasFile('plano_fundo')) {
            $filenameWithExt = $request->file('plano_fundo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('plano_fundo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('plano_fundo')->storeAs('public/images', $fileNameToStore);
        }

        $validatedData['plano_fundo'] = $fileNameToStore;

        $categoria = Categoria::create($validatedData);

        return $this->show($categoria->id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
            'descricao' => '',
        ]);

        $fileNameToStore = '';

        if ($request->hasFile('plano_fundo')) {
            $filenameWithExt = $request->file('plano_fundo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('plano_fundo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('plano_fundo')->storeAs('public/images', $fileNameToStore);
        }

        if ($fileNameToStore !== '') {
            $validatedData['plano_fundo'] = $fileNameToStore;
        }

        $categoria = Categoria::where('id', $id)
            ->first();

        if ($categoria) {
            $categoria->fill($validatedData);
            $categoria->save();

            return $this->show($categoria->id);
        } else {
            return response(['message' => 'Categoria não encontrado']);
        }
    }

    public function destroy($id)
    {
        $categoria = Categoria::where('id', $id);

        if ($categoria) {
            $categoria->delete();
            return true;
        } else {
            return response(['message' => 'Categoria não encontrado']);
        }
    }
}
