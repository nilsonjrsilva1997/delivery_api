<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Periodo;
use App\Unidade;
use App\FusoHorario;

class HorarioFuncionamentoDelivery extends Model
{
    protected $table = "horario_funcionamento_deliverys";

    protected $fillable = ["period1_id", "periodo2_id", "unidade_id", "pedidos_agendados", "fuso_horario_id", ];

    // relacionamentos
    public function periodo()
    {
        return $this->belongsTo(Periodo::class, "periodo_id", "id");
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, "unidade_id", "id");
    }

    public function fuso_horario()
    {
        return $this->belongsTo(FusoHorario::class, "fuso_horario_id", "id");
    }
}

