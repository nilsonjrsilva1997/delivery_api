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
            ->with(['unidade' => function ($q) {
                $q->with('enderecos')
                    ->with('tempo_espera_entrega')
                    ->with('horario_funcionamento')
                    ->with('sobre_nos')
                    ->with('restaurante')
                    ->with(['produtos' => function ($query) {
                        $query->with('categoria')
                            ->with(['adicional' => function ($query) {
                                $query->with('opcoes');
                            }]);
                    }]);
            }])->get();


        return $restaurantes;
    }
}
