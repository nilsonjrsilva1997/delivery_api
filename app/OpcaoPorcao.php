<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpcaoPorcao extends Model
{
    protected $fillable = ['unidade', 'valor'];

    protected $table = 'opcao_porcoes';
}
