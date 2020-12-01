<?php

namespace App\Http\Services;

class OpcaoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
            [
                "adicional_id" => "required|integer|exists:produtos,id",
                "titulo" => "required|string|max:255",
                "maximo" => "required|numeric",
                "minimo" => "required|numeric",
            ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
            [
                "adicional_id" => "integer|exists:produtos,id",
                "titulo" => "string|max:255",
                "maximo" => "numeric",
                "minimo" => "numeric",
            ];

        return $validateAttributes;
    }
}
