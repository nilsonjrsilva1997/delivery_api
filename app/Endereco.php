<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = "enderecos";

    protected $fillable = ["peso", "teste", "nome", ];

    // relacionamentos

        
    public function user()
    {
        return $this->belongsTo(App\User::class, 'user_id', 'id');
    }
}

