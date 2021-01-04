<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HorarioFuncionamentoDelivery;

class FusoHorario extends Model
{
    protected $table = "fuso_horarios";

    protected $fillable = ["nome", ];

    // relacionamentos
    public function horario_funcionamento()
    {
        return $this->hasMany(HorarioFuncionamentoDelivery::class);
    }
}

