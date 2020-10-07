<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurante;

class HorarioFuncionamento extends Model
{
    protected $fillable = ['abertura', 'fechamento', 'restaurante_id'];

    protected $table = 'horario_funcionamentos';

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id', 'id');
    }
}
