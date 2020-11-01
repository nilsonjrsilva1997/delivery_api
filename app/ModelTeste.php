<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTeste extends Model
{
    protected $table = "modeltestes";

    protected $fillable = ["nome", "idade", "altura", "restauranteId", ];

    // relacionamentos

        
    public function user()
    {
        return $this->belongsTo(App\User::class, 'restauranteId', 'id');
    }    
}

