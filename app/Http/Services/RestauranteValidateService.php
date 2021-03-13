<?php

namespace App\Http\Services;

class RestauranteValidateService {
    public function getValidateRulesCreate() 
    {
        $validateAttributes = [
            "nome" => "required|string|max:255",
            "slug" => "required|string|max:255|unique:restaurantes,slug"
        ];

        return $validateAttributes;
    }

    public function getValidateRulesUpdate() 
    {
        $validateAttributes = [
            "nome" => "string|max:255",
            "slug" => "string|max:255|unique:restaurantes,slug"
        ];

        return $validateAttributes;

    }
}
?>
