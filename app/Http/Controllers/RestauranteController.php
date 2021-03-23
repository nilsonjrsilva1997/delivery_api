<?php

namespace App\Http\Controllers;

use App\Http\Services\RestauranteValidateService;
use App\Restaurante;
use Illuminate\Http\Request;
use App\Unidade;

class RestauranteController extends BaseController
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'slug' => 'required|string|max:255',
            'nome' => 'required|string|max:255',
        ]);

        $restauranteSlug = Restaurante::where(['slug' => $request->slug])->first();

        if ($restauranteSlug) {
            return response(['message' => 'Esse slug já está sendo utilizado por outro restaurante']);
        }

        $validatedData['user_id'] = \Auth::id();

        return Restaurante::create($validatedData);
    }

    public function checkSlug($slug)
    {
        $slug = Restaurante::where(['slug' => $slug])->first();

        return $slug;
    }

    public function getUnidades($restaurante_id)
    {

        $restaurante = \App\REstaurante::where(['id' => $restaurante_id])->with('unidade')->first();



        if (!empty($restaurante['unidade'])) {
            return $restaurante['unidade'];
        } else {
            return response(['message' => 'Restaurante não encotrado'], 422);
        }
    }

    public function update(Request $request, $id)
    {
        $restauranteValidateService = new RestauranteValidateService;
        $validatedData = $request->validate($restauranteValidateService->getValidateRulesUpdate());

        $restaurante = Restaurante::find($id);

        if (!empty($restaurante)) {
            if (\Auth::id() != $restaurante['user_id']) {
                return response(['message' => 'Usuário não possui permissão para executar essa ação'], 401);
            }

            $restaurante->fill($validatedData);
            $restaurante->save();
            return $restaurante;
        } else {
            return response(['message' => ' não encontrado']);
        }
    }

    public function destroy($id)
    {
        $restaurante = Restaurante::find($id);

        if (!empty($restaurante)) {
            if (\Auth::id() != $restaurante['user_id']) {
                return response(['message' => 'Usuário não possui permissão para executar essa ação'], 401);
            }

            Restaurante::find($id)->delete();
        } else {
            return response(['message' => 'Restaurante não encontrado']);
        }
    }
}
