<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EnderecoRestaurante;
use App\TempoEsperaEntrega;
use App\HorarioFuncionamento;
use App\SobreNos;
use App\Restaurante;

class Unidade extends Model
{
    protected $fillable = ['nome', 'foto', 'taxa_entrega', 'restauranteId', 'apelido', 'slug'];

    protected $table = 'unidades';
    
    public function enderecos()
    {
        return $this->hasOne(EnderecoRestaurante::class);
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

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restauranteId', 'id');
    }
}
