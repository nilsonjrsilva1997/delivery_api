<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EnderecoUnidade;
use App\TempoEsperaEntrega;
use App\HorarioFuncionamento;
use App\SobreNos;
use App\Restaurante;
use App\Produto;
use App\ConfigEntrega;
use App\HorarioFuncionamentoDelivery;
use App\UsuarioUnidade;

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

    // public function horario_funcionamento()
    // {
    //     return $this->hasOne(HorarioFuncionamento::class, 'unidade_id', 'id');
    // }

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

    public function config_entrega()
    {
        return $this->hasOne(ConfigEntrega::class);
    }

    public function horario_funcionamento()
    {
        return $this->hasMany(HorarioFuncionamentoDelivery::class);
    }

    public function pagamento_unidade()
    {
        return $this->hasMany(PagamentoUnidade::class);
    }

    public function usuario_unidade()
    {
        return $this->hasMany(UsuarioUnidade::class);
    }
}
