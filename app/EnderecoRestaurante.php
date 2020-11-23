<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurante;

class EnderecoRestaurante extends Model
{
    protected $fillable = ['cep', 'estado', 'cidade', 'bairro', 'rua', 'numero', 'complemento', 'restaurante_id', 'lat', 'lng'];

    protected $table = 'endereco_restaurantes';

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id', 'id');
    }
}
