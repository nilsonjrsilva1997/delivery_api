<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ProdutoPedido;

class Pedido extends Model
{
    protected $table = "pedidos";

    protected $fillable = ["valor_total", "user_id", "enderecos_entrega_id", "status_pedido"];

    // relacionamentos
    public function usuario()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function enderecos_entrega()
    {
        return $this->belongsTo(EnderecoEntrega::class, "enderecos_entrega_id", "id");
    }

    public function produto_pedido()
    {
        return $this->hasMany(ProdutoPedido::class);
    }
}

