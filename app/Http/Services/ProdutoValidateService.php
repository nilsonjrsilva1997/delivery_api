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
                "valor_anterior" => "required|numeric",
                "valor_atual" => "required|numeric",
                "unidade_id" => "required|integer|exists:unidades,id",
                "categoria_id" => "required|integer|exists:categorias,id",
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
                "valor_anterior" => "numeric",
                "valor_atual" => "numeric",
                "unidade_id" => "integer|exists:unidades,id",
                "categoria_id" => "integer|exists:categorias,id",
            ];

        return $validateAttributes;
    }
}
