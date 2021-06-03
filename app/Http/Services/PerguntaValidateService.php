<?php

namespace App\Http\Services;

class PerguntaValidateService
{
    public function getValidateRulesCreate()
    {
        $validateAttributes = 
        [
            "pergunta" => "required|string|max:255",
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate()
    {
        $validateAttributes = 
        [
            "pergunta" => "string|max:255",
        ];

        return $validateAttributes;
    }
}

