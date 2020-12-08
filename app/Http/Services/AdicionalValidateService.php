<?php

namespace App\Http\Services;

class AdicionalValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "produto_id" => "required|integer|exists:produtos,id",
            "titulo" => "required|string|max:255",
            "maximo" => "required|numeric",
            "minimo" => "required|numeric",
            "valor" => "required|numeric",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "produto_id" => "integer|exists:produtos,id",
            "titulo" => "string|max:255",
            "maximo" => "numeric",
            "minimo" => "numeric",
            "valor" => "numeric",
        ];

        return $validateAttributes;
    }
}

