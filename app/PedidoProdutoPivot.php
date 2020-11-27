<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProdutoPivot extends Model
{
    protected $fillable = ["pedido_id", "produto_log_id"];

    protected $table = "pedido_produto_pivot";

    public function pedido()
    {
        return $this->belongsTo("pedido_id");
    }
}
