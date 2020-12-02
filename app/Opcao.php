<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Adicional;

class Opcao extends Model
{
    protected $table = "opcoes";

    protected $fillable = ["adicional_id", "titulo", "descricao", "disponivel", "valor", "imagem", "maximo", "minimo"];

    // relacionamentos
    public function adicional()
    {
        return $this->belongsTo(Adicional::class, "adicional_id", "id");
    }
}
