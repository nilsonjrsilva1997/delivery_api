<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ProdutoPedido;
use App\CupomDesconto;
use App\Unidade;
use App\Entregador;

class Pedido extends Model
{
    protected $table = "pedidos";

    protected $fillable = [
        "user_id",
        "status_pedido",
        "taxa_entrega",
        'cpf',
        'observacao',

        "subtotal",
        "desconto",
        "subtotal_desconto",
        "valor_total",

        "enderecos_entrega_id",
        "cupom_desconto_id",
        "unidade_id",
        "entregador_id",
    ];

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

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, "unidade_id", "id");
    }

    public function entregador()
    {
        return $this->belongsTo(Entregador::class, "unidade_id", "id");
    }

    public function cupom_desconto()
    {
        return $this->belongsTo(CupomDesconto::class, "cupom_desconto_id", "id");
    }
}
