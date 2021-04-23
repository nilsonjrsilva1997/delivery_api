<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Categoria extends Model
{
    protected $fillable = ['nome', 'descricao', 'plano_fundo', 'unidade_id'];

    protected $table = 'categorias';

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
