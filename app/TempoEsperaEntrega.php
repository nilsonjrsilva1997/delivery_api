<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;

class TempoEsperaEntrega extends Model
{
    protected $fillable = ['tempo_minimo', 'tempo_maximo', 'unidadeId'];

    protected $table = 'tempo_espera_entregas';

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidadeId', 'id');
    }
}
