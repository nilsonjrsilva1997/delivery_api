<?php

namespace App\Http\Services;

class EnderecoEstabelecimentoValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes =
            [
                "cep" => "required|string|max:255",
                "estado" => "required|string|max:255",
                "rua" => "required|string|max:255",
                "cidade" => "required|string|max:255",
                "complemento" => "required|string|max:255",
                "bairro" => "required|string|max:255",
                "numero" => "required|string|max:255",
                "restauranteId" => "required|integer|exists:restaurante,id",

            ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes =
            [
                "cep" => "string|max:255",
                "estado" => "string|max:255",
                "rua" => "string|max:255",
                "cidade" => "string|max:255",
                "complemento" => "string|max:255",
                "bairro" => "string|max:255",
                "numero" => "string|max:255",
                "restauranteId" => "integer|exists:restaurante,id",
            ];

        return $validateAttributes;
    }
}
