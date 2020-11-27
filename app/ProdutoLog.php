<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoLog extends Model
{
    protected $fillable = ["nome", "quantidade", "descricao", "valorAnterior", "valorAtual", "unidadeId", "categoriaId", "foto", "produtoId"];

    protected $table = 'produto_log';
}
