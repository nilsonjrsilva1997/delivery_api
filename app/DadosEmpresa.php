<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class DadosEmpresa extends Model
{
    protected $table = "dados_empresas";

    protected $fillable = [
        "site",
        "telefone",
        "email",
        "telefone_financeiro",
        "email_financeiro",
        "unidade_id",
    ];

    // relacionamentos
    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id', 'id');
    }
}
