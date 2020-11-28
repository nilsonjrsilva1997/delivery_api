<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";

    protected $fillable = ["valor_total", "user_id", "enderecos_entrega_id", ];

    // relacionamentos
}

