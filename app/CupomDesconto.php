<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CupomDesconto extends Model
{
    protected $table = "cupomdescontos";

    protected $fillable = ["prefixo", "valor", "data", "codigo", "umCliente", ];

    // relacionamentos
}

