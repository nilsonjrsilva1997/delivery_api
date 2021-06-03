<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Periodo;

class DiasSemanaHorarioDelivery extends Model
{
    protected $table = "dias_semana_horario_deliverys";

    protected $fillable = ["nome", ];

    // relacionamentos
    public function periodo()
    {
        return $this->hasMany(Periodo::class);
    }
}

