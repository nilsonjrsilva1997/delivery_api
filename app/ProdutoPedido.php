<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedido;
use App\Produto;
use App\PedidoAdicional;

class ProdutoPedido extends Model
{
    protected $fillable = ["pedido_id", "produto_id", "nome", "quantidade",  "valor_anterior", "valor_atual", "valor_total", "observacao"];

    protected $table = "pivot_produtos_pedidos";

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, "pedido_id", "id");
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, "produto_id", "id");
    }

    public function pedido_adicional()
    {
        return $this->hasMany(PedidoAdicional::class);
    }
}
