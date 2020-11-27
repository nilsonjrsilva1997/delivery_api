<?php

namespace App\Http\Services;

class PedidoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "produto_id" => "required|integer|exists:produtos,id",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "produto_id" => "integer|exists:produtos,id",
        ];

        return $validateAttributes;
    }
}

