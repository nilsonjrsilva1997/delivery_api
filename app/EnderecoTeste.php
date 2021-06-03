<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoTeste extends Model
{
    protected $table = "enderecotestes";

    protected $fillable = ["cep", "rua", "estado", "cidade", "numero", ];

    // relacionamentos
}

