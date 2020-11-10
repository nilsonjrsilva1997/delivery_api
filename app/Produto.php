<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Restaurante;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = ["nome", "quantidade", "descricao", "valorAnterior", "valorAtual", "restauranteId", "categoriaId", "foto", ];

    // relacionamentos
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restauranteId', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoriaId', 'id');
    }
}

