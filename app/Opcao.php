<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Opcao extends Model
{
    protected $table = "opcoes";

    protected $fillable = ["produto_id", "titulo", "maximo", "minimo", ];

    // relacionamentos
    public function produto()
    {
        return $this->belongsTo(Produto::class, "produto_id", "id");
    }
}