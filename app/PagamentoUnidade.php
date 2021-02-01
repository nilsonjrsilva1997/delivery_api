<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagamentoUnidade extends Model
{
    protected $fillable = ['forma_pagamento_id', 'unidade_id'];

    protected $table = 'pivot_pagamentos_unidade';

    public function forma_pagamento()
    {
        return $this->belongsTo(FormaPagamento::class, 'forma_pagamento_id', 'id');
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id', 'id');
    }
}
