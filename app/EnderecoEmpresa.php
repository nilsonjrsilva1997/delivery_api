<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoEmpresa extends Model
{
    protected $fillable = ['cep', 'estado', 'cidade', 'bairro', 'rua', 'numero', 'complemento', 'empresa_id'];

    protected $table = 'endereco_empresas';
}
