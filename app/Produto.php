<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Unidade;
use App\Adicional;
use App\Pedido;
use App\ProdutoPedido;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = ["nome", "quantidade", "descricao", "valor_anterior", "valor_atual", "unidade_id", "categoria_id", "foto",];

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    public function adicional()
    {
        return $this->hasMany(Adicional::class);
    }

    public function opcao()
    {
        return $this->hasMany(Opcao::class);
    }

    public function produto_pedido()
    {
        return $this->hasMany(ProdutoPedido::class);
    }
}
