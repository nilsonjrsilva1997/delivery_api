<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EnderecoRestaurante;
use App\TempoEsperaEntrega;
use App\HorarioFuncionamento;
use App\SobreNos;
use App\EnderecoEstabelecimento;

class Restaurante extends Model
{
    protected $fillable = ['nome', 'foto', 'taxa_entrega'];

    protected $table = 'restaurantes';
    
    public function enderecos()
    {
        return $this->hasMany(EnderecoRestaurante::class);
    }

    public function tempo_espera_entrega()
    {
        return $this->hasOne(TempoEsperaEntrega::class);
    }

    public function horario_funcionamento()
    {
        return $this->hasOne(HorarioFuncionamento::class);
    }

    public function sobre_nos()
    {
        return $this->hasOne(SobreNos::class);
    }

    public function produtos()
    {
        return $this->hasMany(App\Produtos::class);
    }
}
