<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    protected $fillable = ['nome', 'icone'];

    protected $table = 'forma_pagamentos';

    public function pagamento_unidade()
    {
        return $this->hasMany(PagamentoUnidade::class);
    }
}
