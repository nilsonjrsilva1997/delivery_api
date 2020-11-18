<?php

namespace App\Http\Services;

class UnidadeValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    "nome" => "required|string|max:255",
    
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    "nome" => "string|max:255",
    
];

return $validateAttributes;
}
}

