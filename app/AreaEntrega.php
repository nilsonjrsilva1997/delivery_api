<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ConfigEntrega;

class AreaEntrega extends Model
{
    protected $table = "area_entregas";

    protected $fillable = ["descricao", "preco", "config_entrega_id"];

    public function config_entrega()
    {
        return $this->belongsTo(ConfigEntrega::class, "config_entrega_id", "id");
    }
}

