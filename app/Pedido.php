<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Produto;

class Pedido extends Model
{
    protected $fillable = ['user_id'];

    protected $table = 'pedidos';

    // public function produtos()
    // {
    //     return $this->belongsTo(Produto::class, 'produto_id', 'id');
    // }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
