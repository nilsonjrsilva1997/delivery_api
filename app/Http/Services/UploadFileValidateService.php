<?php

namespace App\Http\Services;

class UploadFileValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    "foto1" => "required|image|mimes:jpeg,png,jpg|max:1048",
    "foto2" => "required|image|mimes:jpeg,png,jpg|max:1048",
    "nome" => "required|string|max:255",
    "foto3" => "required|image|mimes:jpeg,png,jpg|max:1048",
    
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    "foto1" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
    "foto2" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
    "nome" => "string|max:255",
    "foto3" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
    
];

return $validateAttributes;
}
}

