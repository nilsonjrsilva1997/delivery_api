<?php

namespace App\Http\Services;

class RestauranteTesteValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    "endereco" => "required|integer",
    "nome" => "required|string|max:255",
    "contato" => "required|string|max:255",
    
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    "endereco" => "integer",
    "nome" => "string|max:255",
    "contato" => "string|max:255",
    
];

return $validateAttributes;
}
}

