<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CupomDesconto extends Model
{
    protected $table = "cupom_descontos";

    protected $fillable = ["codigo", "tp_beneficio", "sufixo_beneficio", "valor_beneficio", "beneficio_descricao", "usos", "tipo", "status", "validade", "unidade_id"];

    // relacionamentos
    public function unidade()
    {
        return $this->belongsTo(Unidade::class, "unidade_id", "id");
    }

    public function pedido()
    {
        return $this->hasMany(Pedido::class);
    }
}

