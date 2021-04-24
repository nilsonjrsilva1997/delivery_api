<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use App\Restaurante;

class UnidadeRestauranteController extends Controller
{
    public function byApelido($apelido)
    {
        $restaurante = Restaurante::where(['slug' => $apelido])
            ->first();

        if ($restaurante) {
            $unidades = Unidade::where('restaurante_id', $restaurante->id)
                ->with('enderecos')
                ->with('tempo_espera_entrega')
                ->with('horario_funcionamento')
                ->has('enderecos')
                ->has('tempo_espera_entrega')
                ->has('produtos')
                ->get();

            $restaurante->unidade = $unidades;

            return $restaurante;
        } else {
            return $restaurante;
        }
    }

    public function byApelidoCidade($apelido, $cidade)
    {
        $unidade = Unidade::query()
            ->where(['slug' => $cidade])
            ->with('enderecos')
            ->with('tempo_espera_entrega')
            ->with('horario_funcionamento')
            ->with('sobre_nos')
            ->with('dados_empresa')
            ->with('restaurante')
            ->with('produtos')
            ->with('produtos.categoria')
            ->with('produtos.adicional')
            ->with('produtos.adicional.opcoes')
            ->has('enderecos')
            ->has('tempo_espera_entrega')
            ->has('produtos')
            ->whereHas('restaurante', function ($query) use ($apelido) {
                $query->where(['slug' => $apelido]);
            })->first();


        return $unidade;
    }
}
