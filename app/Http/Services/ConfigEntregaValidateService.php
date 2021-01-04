<?php

namespace App\Http\Services;

class ConfigEntregaValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "pedido_minimo_delivery" => "required|numeric",
            "tempo_espera_min" => "required|integer",
            "tempo_espera_max" => "required|integer",
            "integracao_loggi" => "required|boolean",
            "integracao_rapiddo" => "required|boolean",
            "retirada_loja" => "required|boolean",
            "tempo_retirada" => "required|integer",
            "unidade_id" => "required|integer|exists:unidades,id",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "pedido_minimo_delivery" => "numeric",
            "tempo_espera_min" => "integer",
            "tempo_espera_max" => "integer",
            "integracao_loggi" => "boolean",
            "integracao_rapiddo" => "boolean",
            "retirada_loja" => "boolean",
            "tempo_retirada" => "integer",
            "unidade_id" => "integer|exists:unidades,id",
        ];

        return $validateAttributes;
    }
}

