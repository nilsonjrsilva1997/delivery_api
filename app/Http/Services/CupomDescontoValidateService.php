<?php

namespace App\Http\Services;

class CupomDescontoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
            [
                "codigo" => "required|string|max:255",
                "tp_beneficio" => "required|in:DESCONTO,OUTRO",
                "sufixo_beneficio" => "required|in:VALOR,PORCENTAGEM",
                "valor_beneficio" => "required|numeric",
                "beneficio_descricao" => "",
                "status" => "required|in:ATIVADO,DESATIVO",
                "validade" => "required|date",
                "unidade_id" => "required|integer|exists:unidades,id",
                "usos" => "required|integer",
            ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
            [
                "codigo" => "string|max:255",
                "tp_beneficio" => "in:DESCONTO,OUTRO",
                "sufixo_beneficio" => "in:VALOR,PORCENTAGEM",
                "valor_beneficio" => "numeric",
                "beneficio_descricao" => "",
                "status" => "in:ATIVADO,DESATIVO",
                "validade" => "date",
                "unidade_id" => "integer|exists:unidades,id",
                "usos" => "integer",
            ];

        return $validateAttributes;
    }
}
