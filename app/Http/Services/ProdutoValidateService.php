<?php

namespace App\Http\Services;

class ProdutoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
            [
                "nome" => "required|string|max:255",
                "quantidade" => "required|integer",
                "descricao" => "required|string|max:255",
                "valorAnterior" => "required|numeric",
                "valorAtual" => "required|numeric",
                "restauranteId" => "required|integer|exists:restaurantes,id",
                "categoriaId" => "required|integer|exists:categorias,id",
                // 'foto' => 'required|image|mimes:jpeg,png,jpg',
            ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
            [
                "nome" => "string|max:255",
                "quantidade" => "integer",
                "descricao" => "string|max:255",
                "valorAnterior" => "numeric",
                "valorAtual" => "numeric",
                "restauranteId" => "integer",
                "categoriaId" => "integer",
                // 'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];

        return $validateAttributes;
    }
}
