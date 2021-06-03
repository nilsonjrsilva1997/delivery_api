<?php

namespace App\Http\Services;

class EntregadorValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "codigo" => "required|string|max:255",
            "nome" => "required|string|max:255",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "codigo" => "string|max:255",
            "nome" => "string|max:255",
        ];

        return $validateAttributes;
    }
}

