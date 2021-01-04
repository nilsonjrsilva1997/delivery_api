<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Opcao;
use App\PedidoAdicional;

class PedidoAdicionalOpcao extends Model
{
    protected $table = "pivot_pedido_adicional_opcoes";

    protected $fillable = ["opcao_id", "pedido_adicional_id", ];

    // relacionamentos
    public function opcoes()
    {
        return $this->belongsTo(Opcao::class, "opcao_id", "id");
    }

    public function  pedido_adicional()
    {
        return $this->belongsTo(PedidoAdicional::class, "pedido_adicional_id", "id");
    }
}

