<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;
use App\AreaEntrega;

class ConfigEntrega extends Model
{
    protected $table = "config_entregas";

    protected $fillable = [
        "pedido_minimo",
        "pedido_minimo_valor",
        "taxa_entrega",
        "multiplicador_taxa_entrega",
        "area_maxima",
        "tempo_maximo",
        "tempo_minimo",
        "integracao_loggi",
        "integracao_rapiddo",
        "retirada_loja",
        "tempo_retirada",
        "unidade_id"
    ];

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, "unidade_id", "id");
    }

    public function area_entrega()
    {
        return $this->hasMany(AreaEntrega::class);
    }
}
