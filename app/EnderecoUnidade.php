<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;

class EnderecoUnidade extends Model
{
    protected $fillable = ['cep', 'estado', 'cidade', 'bairro', 'rua', 'numero', 'complemento', 'unidade_id', 'lat', 'lng'];

    protected $table = 'endereco_unidades';


    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id', 'id');
    }
}
