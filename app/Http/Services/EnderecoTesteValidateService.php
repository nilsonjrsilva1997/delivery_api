<?php

namespace App\Http\Services;

class EnderecoTesteValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    "cep" => "required|string|max:255",
    "rua" => "required|string|max:255",
    "estado" => "required|string|max:255",
    "cidade" => "required|string|max:255",
    "numero" => "required|integer",
    
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    "cep" => "string|max:255",
    "rua" => "string|max:255",
    "estado" => "string|max:255",
    "cidade" => "string|max:255",
    "numero" => "integer",
    
];

return $validateAttributes;
}
}

