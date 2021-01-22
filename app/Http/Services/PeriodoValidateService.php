<?php

namespace App\Http\Services;

class PeriodoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
        [
            "hora_inicial" => "required|date_format:H:i",
            "hora_final" => "required|date_format:H:i",
            "dia_semana_id" => "required|integer|exists:dias_semana_horario_deliverys,id",
            "num_periodo" => "required|integer",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
        [
            "hora_inicial" => "date_format:H:i",
            "hora_final" => "date_format:H:i",
            "dia_semana_id" => "integer|exists:dias_semana_horario_deliverys,id",
            "num_periodo" => "required|integer",
        ];

        return $validateAttributes;
    }
}

