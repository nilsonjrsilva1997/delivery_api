<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EnderecoUnidade;
use App\TempoEsperaEntrega;
use App\HorarioFuncionamento;
use App\SobreNos;
use App\Restaurante;
use App\Produto;

class Unidade extends Model
{
    protected $fillable = ['nome', 'foto', 'taxa_entrega', 'restauranteId', 'slug', 'banner'];

    protected $table = 'unidades';

    public function enderecos()
    {
        return $this->hasOne(EnderecoUnidade::class, 'unidadeId', 'id');
    }

    public function tempo_espera_entrega()
    {
        return $this->hasOne(TempoEsperaEntrega::class, 'unidadeId', 'id');
    }

    public function horario_funcionamento()
    {
        return $this->hasOne(HorarioFuncionamento::class, 'unidadeId', 'id');
    }

    public function sobre_nos()
    {
        return $this->hasOne(SobreNos::class, 'unidadeId', 'id');
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'unidadeId', 'id');
    }

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restauranteId', 'id');
    }
}
