<?php

namespace App\Http\Services;

class ConfigEntregaValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
            [
                "pedido_minimo" => "required|boolean",
                "pedido_minimo_valor" => "required|numeric",
                "taxa_entrega" => 'required|numeric',
                "multiplicador_taxa_entrega" => 'required|numeric',
                "area_maxima" => "required|numeric",
                'tempo_minimo' => 'required|date_format:H:i',
                'tempo_maximo' => 'required|date_format:H:i',
                "integracao_loggi" => "required|boolean",
                "integracao_rapiddo" => "required|boolean",
                "retirada_loja" => "required|boolean",
                "tempo_retirada" => "required|date_format:H:i",
                "unidade_id" => "required|integer|exists:unidades,id",
            ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
            [
                "pedido_minimo" => "boolean",
                "pedido_minimo_valor" => "numeric",
                "taxa_entrega" => 'numeric',
                "multiplicador_taxa_entrega" => 'numeric',
                "area_maxima" => "numeric",
                'tempo_minimo' => 'date_format:H:i',
                'tempo_maximo' => 'date_format:H:i',
                "integracao_loggi" => "boolean",
                "integracao_rapiddo" => "boolean",
                "retirada_loja" => "boolean",
                "tempo_retirada" => "date_format:H:i",
                "unidade_id" => "integer|exists:unidades,id",
            ];

        return $validateAttributes;
    }
}
