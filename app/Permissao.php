<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = "permissoes";

    protected $fillable = ["user_id", "unidade_id", "tipo"];

    // relacionamentos
    public function usuario()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }

    public function unidade()
    {
        return $this->belongsTo(\App\Unidade::class, 'unidade_id', 'id');
    }
}

