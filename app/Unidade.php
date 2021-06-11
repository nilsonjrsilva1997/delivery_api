<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EnderecoUnidade;
use App\TempoEsperaEntrega;
use App\DadosEmpresa;
use App\SobreNos;
use App\Restaurante;
use App\Produto;
use App\ConfigEntrega;
use App\HorarioFuncionamentoDelivery;
use App\UsuarioUnidade;
use App\Pedido;
use App\Permissao;
use App\Entregador;

class Unidade extends Model
{
    protected $fillable = ['nome', 'foto', 'restaurante_id', 'slug', 'banner', 'cor_categoria', 'cor_fundo', 'mais_pedido', 'sugestao_id'];

    protected $table = 'unidades';

    public function getBannerAttribute($banner)
    {
        if (str_contains($banner, 'http')) {
            return $banner;
        }

        return asset('/storage/images/' . $banner);
    }

    public function getFotoAttribute($foto)
    {
        if (str_contains($foto, 'http')) {
            return $foto;
        }

        return asset('/storage/images/' . $foto);
    }

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

    public function dados_empresa()
    {
        return $this->hasOne(DadosEmpresa::class, 'unidade_id', 'id');
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'unidade_id', 'id');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'unidade_id', 'id');
    }

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id', 'id');
    }

    public function config_entrega()
    {
        return $this->hasOne(ConfigEntrega::class, 'unidade_id', 'id');
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

    public function permissao()
    {
        return $this->hasMany(Permissao::class);
    }

    public function entregadores()
    {
        return $this->hasMany(Entregador::class, 'unidade_id', 'id');
    }

    public function sugestao()
    {
        return $this->hasOne(Produto::class, 'sugestao_id', 'id');
    }
}
