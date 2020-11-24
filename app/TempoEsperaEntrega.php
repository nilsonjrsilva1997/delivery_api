<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurante;

class TempoEsperaEntrega extends Model
{
    protected $fillable = ['tempo_minimo', 'tempo_maximo', 'restauranteId'];

    protected $table = 'tempo_espera_entregas';

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restauranteId', 'id');
    }
}
