<?php

namespace App\Http\Services;

class DadosEmpresaValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
            [
                "site" => "required|url",
                "telefone" => 'required|celular_com_ddd',
                "email" => 'required|email',
                "telefone_financeiro" => "required|celular_com_ddd",
                "email_financeiro" => "required|email",
                "unidade_id" => "required|integer|exists:unidades,id",
            ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
            [
                "site" => "url",
                "telefone" => 'celular_com_ddd',
                "email" => 'email',
                "telefone_financeiro" => "celular_com_ddd",
                "email_financeiro" => "email",
            ];

        return $validateAttributes;
    }
}
