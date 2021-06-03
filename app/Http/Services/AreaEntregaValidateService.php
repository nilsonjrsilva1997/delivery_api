<?php

namespace App\Http\Services;

class AreaEntregaValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "descricao" => "required|string|max:255",
            "preco" => "required|numeric",
            "config_entrega_id" => "required|integer|exists:config_entregas,id",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "descricao" => "string|max:255",
            "preco" => "numeric",
            "config_entrega_id" => "integer|exists:config_entregas,id",
        ];

        return $validateAttributes;
    }
}

