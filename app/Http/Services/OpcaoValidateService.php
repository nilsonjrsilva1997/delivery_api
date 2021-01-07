<?php

namespace App\Http\Services;

class OpcaoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
            [
                "adicional_id" => "required|integer|exists:adicionais,id",
                "titulo" => "required|string|max:255",
                "descricao" => "required|string|max:255",
                "disponivel" => "required|boolean",
                "valor" => "required|numeric",
                "imagem" => "string|max:255",
                "maximo" => "required|integer",
                "minimo" => "required|integer",
            ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
            [
                "adicional_id" => "integer|exists:adicionais,id",
                "titulo" => "string|max:255",
                "descricao" => "string|max:255",
                "disponivel" => "boolean",
                "valor" => "numeric",
                "imagem" => "string|max:255",
                "maximo" => "numeric",
                "minimo" => "numeric",
            ];

        return $validateAttributes;
    }
}
