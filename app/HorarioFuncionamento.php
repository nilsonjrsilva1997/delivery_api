<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurante;

class HorarioFuncionamento extends Model
{
    protected $fillable = ['abertura', 'fechamento', 'restauranteId'];

    protected $table = 'horario_funcionamentos';

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restauranteId', 'id');
    }
}
