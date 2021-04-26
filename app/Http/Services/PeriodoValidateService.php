<?php

namespace App\Http\Services;

class PeriodoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
            [
                "hora_inicial" => "required",
                "hora_final" => "required",
                "dia_semana_id" => "required|integer|exists:dias_semana_horario_deliverys,id",
            ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
            [
                "hora_inicial" => "",
                "hora_final" => "",
                "dia_semana_id" => "integer|exists:dias_semana_horario_deliverys,id",
            ];

        return $validateAttributes;
    }
}
