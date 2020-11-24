<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurante;

class EnderecoEstabelecimento extends Model
{
    protected $table = "enderecoestabelecimentos";

    protected $fillable = ["cep", "estado", "rua", "cidade", "complemento", "bairro", "numero", "restaurante_id", ];

    // relacionamentos
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id', 'id');
    }
}

