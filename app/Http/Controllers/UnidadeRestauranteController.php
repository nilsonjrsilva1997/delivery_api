<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use App\Restaurante;

class UnidadeRestauranteController extends Controller
{
    public function byApelido($apelido)
    {
        $unidades = Restaurante::where(['slug' => $apelido])
            ->with(['unidade' => function ($query) {
                $query->with('enderecos')
                    ->with('tempo_espera_entrega')
                    ->with('horario_funcionamento');
            }])->first();

        return $unidades;
    }

    public function byApelidoCidade($apelido, $cidade)
    {
        $unidade = Unidade::where(['slug' => $cidade])
            ->with('enderecos')
            ->with('tempo_espera_entrega')
            ->with('horario_funcionamento')
            ->with('sobre_nos')
            ->with('restaurante')
            ->whereHas('restaurante', function ($query) use ($apelido) {
                $query->where(['slug' => $apelido]);
            })->first();


        return $unidade;
    }
}
