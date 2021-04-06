<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Unidade;


class Permissao extends Model
{
    protected $table = "permissoes";

    protected $fillable = ["user_id", "unidade_id", "tipo"];

    // relacionamentos
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id', 'id');
    }
}
