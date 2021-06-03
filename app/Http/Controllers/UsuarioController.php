<?php

namespace App\Http\Controllers;

use App\Restaurante;
use Illuminate\Http\Request;

use Auth;

class UsuarioController extends Controller
{
    public function meusRestaurantes()
    {

        $user_id = Auth::id();
        $restaurantes = Restaurante::query()
            ->where('user_id', $user_id)
            ->with('unidade')
            ->with('unidade.enderecos')
            ->with('unidade.config_entrega')
            ->with('unidade.horario_funcionamento')
            ->with('unidade.sobre_nos')
            ->with('unidade.produtos')
            ->with('unidade.produtos.categoria')
            ->with('unidade.produtos.adicional')
            ->with('unidade.produtos.adicional.opcoes')
            ->get();


        return $restaurantes;
    }
}
