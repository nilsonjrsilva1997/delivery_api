<?php

namespace App\Http\Services;

class ProdutoPedidoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "pedido_id" => "required|integer|exists:pedidos,id",
            "produto_id" => "required|integer|exists:produtos,id",
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
            "pedido_id" => "integer|exists:pedidos,id",
            "produto_id" => "integer|exists:produtos,id",
            "valor_atual" => "numeric",
            "nome" => "string|max:255",
            "descricao" => "string|max:255",
        ];

        return $validateAttributes;
    }
}

