<?php

namespace App\Http\Services;

class CupomDescontoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "prefixo" => "required|in:DINHEIRO,PORCENTAGEM",
            "valor" => "required|numeric",
            "data" => "required|date",
            "codigo" => "required|string|max:255",
            "umCliente" => "required|boolean",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "prefixo" => "in:DINHEIRO,PORCENTAGEM",
            "valor" => "numeric",
            "data" => "date",
            "codigo" => "string|max:255",
            "umCliente" => "boolean",
        ];

        return $validateAttributes;
    }
}

