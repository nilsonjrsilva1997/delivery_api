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
    protected $fillable = ['nome', 'foto', 'taxa_entrega', 'restaurante_id', 'slug', 'banner'];

    protected $table = 'unidades';

    public function enderecos()
    {
        return $this->hasOne(EnderecoUnidade::class, 'unidade_id', 'id');
    }

    public function tempo_espera_entrega()
    {
        return $this->hasOne(TempoEsperaEntrega::class, 'unidade_id', 'id');
    }

    public function horario_funcionamento()
    {
        return $this->hasOne(HorarioFuncionamento::class, 'unidade_id', 'id');
    }

    public function sobre_nos()
    {
        return $this->hasOne(SobreNos::class, 'unidade_id', 'id');
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'unidade_id', 'id');
    }

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id', 'id');
    }
}
