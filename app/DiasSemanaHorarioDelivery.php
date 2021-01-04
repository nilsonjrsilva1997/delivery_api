<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Periodo1;
use App\Periodo2;

class DiasSemanaHorarioDelivery extends Model
{
    protected $table = "dias_semana_horario_deliverys";

    protected $fillable = ["nome", ];

    // relacionamentos
    public function periodo1()
    {
        return $this->hasMany(Periodo1::class);
    }

    public function periodo2()
    {
        return $this->hasMany(Periodo2::class);
    }
}

