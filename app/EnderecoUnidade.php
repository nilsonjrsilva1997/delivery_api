<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;

class EnderecoUnidade extends Model
{
    protected $fillable = ['cep', 'estado', 'cidade', 'bairro', 'rua', 'numero', 'complemento', 'unidadeId', 'lat', 'lng'];

    protected $table = 'endereco_unidades';

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidadeId', 'id');
    }
}
