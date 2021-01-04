<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entregador;

class EntregadorController extends BaseController
{
   public function create(Request $request)
   {
       $validatedData = $request->validate([
            "codigo" => "required|string|max:255",
            "nome" => "required|string|max:255",
       ]);

       $validatedData['user_id'] = \Auth::id();

       return Entregador::create($validatedData);
   }
}
