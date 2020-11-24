<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EnderecoRestaurante;
use App\TempoEsperaEntrega;
use App\HorarioFuncionamento;
use App\SobreNos;
use App\Restaurante;
use App\Produtos;

class Unidade extends Model
{
    protected $fillable = ['nome', 'foto', 'taxa_entrega', 'restaurante_id', 'slug'];

    protected $table = 'unidades';

    public function enderecos()
    {
        return $this->hasOne(EnderecoRestaurante::class, 'restaurante_id', 'id');
    }

    public function tempo_espera_entrega()
    {
        return $this->hasOne(TempoEsperaEntrega::class, 'restaurante_id', 'id');
    }

    public function horario_funcionamento()
    {
        return $this->hasOne(HorarioFuncionamento::class, 'restaurante_id', 'id');
    }

    public function sobre_nos()
    {
        return $this->hasOne(SobreNos::class, 'restaurante_id', 'id');
    }

    public function produtos()
    {
        return $this->hasMany(Produtos::class, 'restaurante_id', 'id');
    }

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id', 'id');
    }
}
