<?php

namespace App\Http\Services;

class AdicionalValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    "produtoId" => "required|integer|exists:produtos,id",
    "titulo" => "required|string|max:255",
    "maximo" => "required|integer",
    "minimo" => "required|integer",
    
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    "produtoId" => "integer|exists:produtos,id",
    "titulo" => "string|max:255",
    "maximo" => "integer",
    "minimo" => "integer",
    
];

return $validateAttributes;
}
}

