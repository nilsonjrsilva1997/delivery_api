<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pesquisa;
use App\Pergunta;

class PerguntaPesquisa extends Model
{
    protected $fillable = ['pesquisa_id', 'pergunta_id'];

    protected $table = 'pivot_pergunta_pesquisa';

    public function pesquisa() {
        return $this->belongsTo(Pesquisa::class, 'pesquisa_id', 'id');
    }

    public function pergunta() {
        return $this->belongsTo(Pergunta::class, 'pergunta_id', 'id');
    }
}
