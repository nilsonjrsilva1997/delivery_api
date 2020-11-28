<?php

namespace App\Http\Services;

class PedidoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "valor_total" => "required|numeric",
            "user_id" => "required|integer|exists:users,id",
            "enderecos_entrega_id" => "required|integer|exists:enderecos_entrega,id",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "valor_total" => "numeric",
            "user_id" => "integer|exists:users,id",
            "enderecos_entrega_id" => "integer|exists:enderecos_entrega,id",
        ];

        return $validateAttributes;
    }
}

