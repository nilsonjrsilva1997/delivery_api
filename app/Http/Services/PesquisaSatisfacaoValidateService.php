<?php

namespace App\Http\Services;

class PedidoValidateService
{
    public function getValidateRulesCreate()
    {
        // apagar isso depois
        $validateAttributes = 
        [
            "data" => "required|date",
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

