<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;

class Restaurante extends Model
{
    protected $table = "restaurantes";

    protected $fillable = ["nome", "slug"];

    // relacionamentos
    public function unidade()
    {
        return $this->hasMany(Unidade::class, 'restaurante_id');
    }
}

