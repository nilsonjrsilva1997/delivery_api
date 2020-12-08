<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;
use App\PedidoAdicionalOpcao;

class Opcao extends Model
{
    protected $table = "opcoes";

    protected $fillable = ["produto_id", "titulo", "maximo", "minimo", ];

    // relacionamentos
    public function produto()
    {
        return $this->belongsTo(Produto::class, "produto_id", "id");
    }

    public function pedido_adicional_opcao()
    {
        return $this->hasMany(PedidoAdicionalOpcao::class);
    }
}