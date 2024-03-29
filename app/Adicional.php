<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Opcao;
use App\Produto;

class Adicional extends Model
{
    protected $table = "adicionais";

    protected $fillable = ["produto_id", "titulo", "maximo", "minimo", "valor"];

    // relacionamentos
    public function produto()
    {
        return $this->belongsTo(Produto::class, "produto_id", "id");
    }

    public function opcoes()
    {
        return $this->hasMany(Opcao::class, "adicional_id", "id");
    }
}
