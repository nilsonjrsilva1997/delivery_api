<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Pergunta;

class Resposta extends Model
{
    protected $fillable = ['pergunta_id', 'resposta', 'user_id'];

    protected $table = 'resposta';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pergunta()
    {
        return $this->belongsTo(Pergunta::class, 'pergunta_id', 'id');
    }
}
