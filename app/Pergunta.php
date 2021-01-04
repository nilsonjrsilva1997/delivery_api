<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PerguntaPesquisa;
use App\Resposta;

class Pergunta extends Model
{
    protected $fillable = ['pergunta'];

    protected $table = 'pergunta';

    public function pergunta_pesquisa()
    {
        return $this->hasMany(PerguntaPesquisa::class);
    }

    public function resposta()
    {
        return $this->hasMany(Resposta::class);
    }
}
