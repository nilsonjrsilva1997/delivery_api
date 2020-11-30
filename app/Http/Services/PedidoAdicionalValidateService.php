<?php

namespace App\Http\Services;

class PedidoAdicionalValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "adicional_id" => "required|integer|exists:adicionais,id",
            "produto_pedido_id" => "required|integer|exists:pivot_produtos_pedidos,id",
            "valor_atual" => "required|numeric",
            "nome" => "required|string|max:255",
            "descricao" => "required|string|max:255",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "adicional_id" => "integer|exists:adicionais,id",
            "produto_pedido_id" => "integer|exists:pivot_produtos_pedidos,id",
            "valor_atual" => "numeric",
            "nome" => "string|max:255",
            "descricao" => "string|max:255",
        ];

        return $validateAttributes;
    }
}

