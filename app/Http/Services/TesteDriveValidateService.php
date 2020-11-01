<?php

namespace App\Http\Services;

class TesteDriveValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    "teste" => "required|numeric",
    "idade" => "required|integer",
    "testeString" => "required|string|max:255",
    
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    "teste" => "numeric",
    "idade" => "integer",
    "testeString" => "string|max:255",
    
];

return $validateAttributes;
}
}

