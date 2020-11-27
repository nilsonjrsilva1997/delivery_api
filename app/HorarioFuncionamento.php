<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;

class HorarioFuncionamento extends Model
{
    protected $fillable = ['abertura', 'fechamento', 'unidadeId'];

    protected $table = 'horario_funcionamentos';

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidadeId', 'id');
    }
}
