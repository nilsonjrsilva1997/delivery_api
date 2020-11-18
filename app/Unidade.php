<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurante;

class Unidade extends Model
{
    protected $table = "unidades";

    protected $fillable = ["nome", ];

    // relacionamentos
    public function restaurante()
    {
        return $this->hasMany(Restaurante::class, 'unidadeId');
    }
}

