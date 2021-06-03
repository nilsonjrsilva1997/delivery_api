<?php

namespace App\Http\Services;

class PedidoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "valor_total" => "required|numeric",
            "enderecos_entrega_id" => "required|integer|exists:enderecos_entrega,id",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "valor_total" => "numeric",
            "enderecos_entrega_id" => "integer|exists:enderecos_entrega,id",
        ];

        return $validateAttributes;
    }
}

