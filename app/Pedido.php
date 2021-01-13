<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ProdutoPedido;
use App\CupomDesconto;

class Pedido extends Model
{
    protected $table = "pedidos";

    protected $fillable = ["valor_total", "user_id", "enderecos_entrega_id", "status_pedido", "cupom_desconto_id"];

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

    public function cupom_desconto()
    {
        return $this->belongsTo(CupomDesconto::class, "cupom_desconto_id", "id");
    }
}

