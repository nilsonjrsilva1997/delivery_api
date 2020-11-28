<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;

class HorarioFuncionamento extends Model
{
    protected $fillable = ['abertura', 'fechamento', 'unidade_id'];

    protected $table = 'horario_funcionamentos';

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id', 'id');
    }
}
