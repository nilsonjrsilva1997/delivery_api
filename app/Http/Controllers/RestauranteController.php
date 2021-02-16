<?php

namespace App\Http\Controllers;

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

        $restauranteSlugCount = Restaurante::where(['slug' => $request->slug])->count();

        if($restauranteSlugCount != 0) {
            return response(['message' => 'Esse slug já está sendo utilizado por outro restaurante']);
        }

        $validatedData['user_id'] = \Auth::id();

        return Restaurante::create($validatedData);
   }

   public function checkSlug($slug)
    {
        $unidadeSlugCount = Restaurante::where(['slug' => $slug])->count();

        if($unidadeSlugCount != 0) {
            return response(['message' => 'Esse slug já está sendo utilizado por outro restaurante'], 422);
        } else {
            return response(['message' => 'Slug disponível']);
        }
    }
}