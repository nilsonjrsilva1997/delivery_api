<?php

namespace App\Http\Services;

class OpcaoValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    "adicionalId" => "required|integer",
    "nome" => "required|string|max:255",
    "descricao" => "required|string|max:255",
    // "imagem" => "required|string|max:255",
    "disponivel" => "required|boolean",
    "valor" => "required|numeric",
    
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    "adicionalId" => "integer",
    "nome" => "string|max:255",
    "descricao" => "string|max:255",
    // "imagem" => "string|max:255",
    "disponivel" => "boolean",
    "valor" => "numeric",
    
];

return $validateAttributes;
}
}

