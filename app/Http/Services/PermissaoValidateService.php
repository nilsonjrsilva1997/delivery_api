<?php

namespace App\Http\Services;

class PermissaoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "user_id" => "required|integer|exists:users,id",
            "unidade_id" => "required|integer|exists:unidades,id",
            "tipo" => "required|in:ADMINISTRADOR,FUNCIONARIO,GERENTE",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "user_id" => "integer|exists:users,id",
            "unidade_id" => "integer|exists:unidades,id",
            "tipo" => "in:ADMINISTRADOR,GERENTE,FUNCIONARIO",
        ];

        return $validateAttributes;
    }
}
