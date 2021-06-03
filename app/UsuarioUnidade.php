<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;
use App\User;

class UsuarioUnidade extends Model
{
    protected $fillable = ['user_id', 'unidade_id'];

    protected $table = 'usuario_unidades';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id', 'id');
    }
}
