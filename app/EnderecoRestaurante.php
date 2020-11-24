<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurante;

class EnderecoRestaurante extends Model
{
    protected $fillable = ['cep', 'estado', 'cidade', 'bairro', 'rua', 'numero', 'complemento', 'restauranteId', 'lat', 'lng'];

    protected $table = 'endereco_restaurantes';

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restauranteId', 'id');
    }
}
