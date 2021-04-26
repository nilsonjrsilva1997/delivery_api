<?php

namespace App\Http\Services;

class HorarioFuncionamentoDeliveryValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
            [
                "periodo1_id" => "integer|exists:periodos,id",
                "periodo2_id" => "integer|exists:periodos,id",
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
                "periodo1_id" => "integer|exists:periodos,id",
                "periodo2_id" => "integer|exists:periodos,id",
                "unidade_id" => "integer|exists:unidades,id",
                "pedidos_agendados" => "boolean",
                "fuso_horario_id" => "integer|exists:fuso_horarios,id",
            ];

        return $validateAttributes;
    }
}
