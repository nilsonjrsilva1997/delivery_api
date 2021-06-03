<?php

namespace App\Http\Services;

class PedidoAdicionalOpcaoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "opcao_id" => "required|integer",
    "pedido_adicional_id" => "required|integer",
    
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "opcao_id" => "integer",
    "pedido_adicional_id" => "integer",
    
        ];

        return $validateAttributes;
    }
}

