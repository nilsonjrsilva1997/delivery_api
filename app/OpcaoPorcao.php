<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class OpcaoPorcao extends Model
{
    protected $fillable = ['unidade', 'valor', 'titulo', 'produtoId'];

    protected $table = 'opcao_porcoes';

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produtoId', 'id');
    }
}
