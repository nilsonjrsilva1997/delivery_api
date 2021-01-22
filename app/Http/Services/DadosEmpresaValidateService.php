<?php

namespace App\Http\Services;

class DadosEmpresaValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
        [
            "nome_delivery" => "required|string|max:255",
            "site" => "required|url",
            "cep" => "required|formato_cep",
            "endereco" => "required|string|max:255",
            "numero" => "required|integer",
            "bairro" => "required|string|max:255",
            "complemento" => "required|string|max:255",
            "cidade" => "required|string|max:255",
            "uf" => "required|string|max:255",
            "celular" => "required|celular_com_ddd",
            "email" => "required|email",
            "unidade_id" => "required|integer|exists:unidades,id",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
        [
            "nome_delivery" => "string|max:255",
            "site" => "url",
            "cep" => "formato_cep",
            "endereco" => "string|max:255",
            "numero" => "integer",
            "bairro" => "string|max:255",
            "complemento" => "string|max:255",
            "cidade" => "string|max:255",
            "uf" => "string|max:255",
            "celular" => "celular_com_ddd",
            "email" => "email",
            "unidade_id" => "integer|exists:unidades,id",
        ];

        return $validateAttributes;
    }
}

