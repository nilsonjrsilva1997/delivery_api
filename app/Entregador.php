<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;
use App\Pedido;

class Entregador extends Model
{
    protected $table = "entregadores";

    protected $fillable = ["codigo", "nome", "unidade_id"];

    // relacionamentos
    public function unidade()
    {
        return $this->belongsTo(Unidade::class, "unidade_id", "id");
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'entregador_id', 'id');
    }
}
