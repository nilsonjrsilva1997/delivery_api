<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestauranteTeste extends Model
{
    protected $table = "restaurantetestes";

    protected $fillable = ["endereco", "nome", "contato", ];

    // relacionamentos
}

