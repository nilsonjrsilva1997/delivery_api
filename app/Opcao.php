<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Adicional;

class Opcao extends Model
{
    protected $table = "opcaos";

    protected $fillable = ["adicionalId", "nome", "descricao", "imagem", "disponivel", "valor", ];

    // relacionamentos
    public function adicional()
    {
        return $this->belongsTo(Adicional::class, "adicionalId", "id");
    }
}

