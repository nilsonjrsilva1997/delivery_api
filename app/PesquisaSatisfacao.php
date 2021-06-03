<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PerguntaPesquisa;

class PesquisaSatisfacao extends Model
{
    protected $fillable = ['status', 'numero_respostas'];

    protected $table = 'pesquisa_satisfacao';

    public function pergunta_pesquisa()
    {
        return $this->hasMany(PerguntaPesquisa::class);
    }
}