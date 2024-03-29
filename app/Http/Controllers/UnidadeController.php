<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use App\Permissao;
use Auth;
use Illuminate\Support\Facades\Storage;

class UnidadeController extends Controller
{
    private $data = [
        'MESSAGE' => "Usuário não possui permissão para executar essa tarefa",
    ];

    public function index()
    {
        return Unidade::all();
    }

    public function show($id)
    {
        $unidade = Unidade::query()
            ->where('id', $id)
            ->with('enderecos')
            ->with('config_entrega')
            ->with('horario_funcionamento')
            ->with('sobre_nos')
            ->with('dados_empresa')
            ->with('pagamento_unidade')
            ->with('produtos')
            ->with('produtos.categoria')
            ->with('produtos.adicional')
            ->with('produtos.adicional.opcoes')
            ->first();


        if ($unidade) {
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
        }

        $fileNameToStore2 = '';

        if ($request->hasFile('banner')) {
            $filenameWithExt = $request->file('banner')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore2 = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('banner')->storeAs('public/images', $fileNameToStore2);
        }

        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'restaurante_id' => 'required|integer|exists:restaurantes,id',
            'slug' => 'required|string|max:255',
        ]);

        $slug = Unidade::where(['slug' => $request->slug])->whereHas('restaurante', function ($query) use ($request) {
            $query->where(['id' => $request->restaurante_id]);
        })->first();

        if ($slug) {
            return response(['message' => 'Não é possivel criar a unidade'], 422);
        }

        $validatedData['foto'] = $fileNameToStore;
        $validatedData['banner'] = $fileNameToStore2;

        $unidade = Unidade::create($validatedData);

        Permissao::create([
            "user_id" => Auth::id(),
            "unidade_id" => $unidade->id,
            "tipo" => "ADMINISTRADOR",
        ]);

        return response([
            "data" => $this->show($unidade->id),
            "path" => $path,
            "message" => "Dados retornado com sucesso"
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $permissao = \App\Helpers\Helper::getPermissoes(Auth::id(), $id);

        if ($permissao == 'ADMINISTRADOR' || $permissao == 'GERENTE') {
            $validatedData = $request->validate([
                'nome' => 'string|max:255',
                'slug' => 'string|max:255',
                'cor_fundo' => 'string|max:255',
                'cor_categoria' => 'string|max:255',
                'restaurante_id' => 'integer|exists:restaurantes,id',
                'slug' => 'string|max:255',
            ]);

            $unidade = Unidade::find($id);

            if (!empty($unidade)) {
                $unidade->fill($validatedData);
                $unidade->save();

                return response([
                    "data" => $this->show($unidade->id),
                    "message" => "Dados retornado com sucesso"
                ], 200);
            } else {
                return response(['message' => 'Unidade não encontrado']);
            }
        } else {
            return response(['message' => $this->data['MESSAGE']], 401);
        }
    }

    public function destroy($id)
    {
        $permissao = \App\Helpers\Helper::getPermissoes(Auth::id(), $id);

        if ($permissao == 'ADMINISTRADOR' || $permissao == 'GERENTE') {

            $unidade = Unidade::find($id);

            if (!empty($unidade)) {
                Unidade::find($id)->delete();
            } else {
                return response(['message' => 'Unidade não encontrado']);
            }
        }
    }

    public function checkSlug($restaurante, $slug)
    {
        $slug = Unidade::where(['slug' => $slug])
            ->whereHas('restaurante', function ($query) use ($restaurante) {
                $query->where(['slug' => $restaurante]);
            })->first();

        return $slug;
    }
}
