<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Unidade;
use App\Adicional;
use App\Pedido;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = ["nome", "quantidade", "descricao", "valorAnterior", "valorAtual", "unidadeId", "categoriaId", "foto",];

    // relacionamentos
    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidadeId', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoriaId', 'id');
    }

    // public function opcao_porcoes()
    // {
    //     return $this->hasMany(OpcaoPorcao::class, 'produtoId');
    // }

    public function adicional()
    {
        return $this->hasOne(Adicional::class, "produtoId");
    }

    // public static function validateProdutosId($id)
    // {
    //     if(Produto::count() == 0) {
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }
}
