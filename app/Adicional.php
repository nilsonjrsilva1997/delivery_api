<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Opcao;

class Adicional extends Model
{
    protected $table = "adicionals";

    protected $fillable = ["produtoId", "titulo", "maximo", "minimo", ];

    // relacionamentos
    public function produto()
    {
        return $this->belongsTo(Produto::class, "produtoId", "id");
    }

    public function opcoes()
    {
        return $this->hasMany(Opcao::class, "adicionalId");
    }
}

