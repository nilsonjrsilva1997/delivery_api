<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['valor', 'user_id', 'produto_id'];

    protected $table = 'pedidos';

    
}
