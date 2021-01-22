<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DiasSemanaHorarioDelivery;
use App\HorarioFuncionamentoDelivery;

class Periodo extends Model
{
    protected $table = "periodos";

    protected $fillable = ["hora_inicial", "hora_final", "dia_semana_id", ];

    // relacionamentos
    public function dia_semana()
    {
        return $this->belongsTo(DiasSemanaHorarioDelivery::class, "dia_semana_id", "id");
    }

    public function horario_funcionamento()
    {
        return $this->hasMany(HorarioFuncionamentoDelivery::class);
    }
}

