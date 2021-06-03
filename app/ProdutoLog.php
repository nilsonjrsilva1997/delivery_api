<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoLog extends Model
{
    protected $fillable = ["nome", "quantidade", "descricao", "valorAnterior", "valorAtual", "unidade_id", "categoriaId", "foto", "produto_id"];

    protected $table = 'produto_log';
}
