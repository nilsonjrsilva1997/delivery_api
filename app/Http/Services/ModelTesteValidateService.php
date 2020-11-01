<?php

namespace App\Http\Services;

class ModelTesteValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    "nome" => "required|string|max:255",
    "idade" => "required|integer",
    "altura" => "required|numeric",
    "restauranteId" => "required|integer",
    
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    "nome" => "string|max:255",
    "idade" => "integer",
    "altura" => "numeric",
    "restauranteId" => "integer",
    
];

return $validateAttributes;
}
}

