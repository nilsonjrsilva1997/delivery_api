<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class DadosEmpresa extends Model
{
    protected $table = "dados_empresas";

    protected $fillable = ["nome_delivery", "site", "cep", "endereco", "numero", "bairro", "complemento", "cidade", "uf", "celular", "email", "unidade_id"];

    // relacionamentos
    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }
}

