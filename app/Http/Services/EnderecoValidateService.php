<?php

namespace App\Http\Services;

class EnderecoValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    "peso" => "required|integer",
    "teste" => "required|numeric",
    "nome" => "required|string|max:255",
    
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    "peso" => "integer",
    "teste" => "numeric",
    "nome" => "string|max:255",
    
];

return $validateAttributes;
}
}

