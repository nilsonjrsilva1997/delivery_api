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
        ->with(['unidade' => function($query) {
            $query->with('enderecos')
                ->with('tempo_espera_entrega')
                ->with('horario_funcionamento');
        }])->first();

        /* foreach($unidades as $key => $unidade) {
            $restaurantes = $unidade->restaurante;

            foreach($restaurantes as $key => $restaurante) {
                $restaurantes[$key]->endereco = $restaurante->enderecos;
            }

            $unidades[$key]->restaurante = $restaurantes;
        } */

        return $unidades;
    }

    public function byApelidoCidade($apelido, $cidade)
    {
        $unidades = Unidade::where(['nome' => $apelido])->get();

        foreach($unidades as $key => $unidade) {
            $restaurantes = $unidade->restaurante;

            foreach($restaurantes as $key => $restaurante) {
                $restaurantes[$key]->endereco = $restaurante->enderecos;
            }

            $unidades[$key]->restaurante = $restaurantes;
        }

        return $unidades;
    }
}
