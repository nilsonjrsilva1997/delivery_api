<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Restaurante;
use App\Adicional;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = ["nome", "quantidade", "descricao", "valorAnterior", "valorAtual", "restaurante_id", "categoriaId", "foto", ];

    // relacionamentos
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id', 'id');
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
}

