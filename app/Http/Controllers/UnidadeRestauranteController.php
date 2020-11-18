<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;

class UnidadeRestauranteController extends Controller
{
    public function byApelido($apelido)
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
