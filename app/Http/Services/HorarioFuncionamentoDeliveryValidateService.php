<?php

namespace App\Http\Services;

class HorarioFuncionamentoDeliveryValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "period1_id" => "integer|exists:periodo1s,id",
            "periodo2_id" => "integer|exists:periodo2s,id",
            "unidade_id" => "required|integer|exists:unidades,id",
            "pedidos_agendados" => "required|boolean",
            "fuso_horario_id" => "required|integer|exists:fuso_horarios,id",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "period1_id" => "integer|exists:periodo1s,id",
            "periodo2_id" => "integer|exists:periodo2s,id",
            "unidade_id" => "integer|exists:unidades,id",
            "pedidos_agendados" => "boolean",
            "fuso_horario_id" => "integer|exists:fuso_horarios,id",
        ];

        return $validateAttributes;
    }
}

