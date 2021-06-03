<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Adicional;
use App\ProdutoPedido;
use App\PedidoAdicionalOpcao;

class PedidoAdicional extends Model
{
    protected $fillable = ["adicional_id", "produto_pedido_id", "titulo", "valor"];

    protected $table = "pivot_pedidos_adicionais";

    public function adicional()
    {
        return $this->belongsTo(Adicional::class, "adicional_id", "id");
    }

    public function produto_pedido()
    {
        return $this->belongsTo(ProdutoPedido::class, "produto_pedido_id", "id");
    }

    public function pedido_adicional_opcao()
    {
        return $this->hasMany(PedidoAdicionalOpcao::class);
    }
}
