<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class DadosEmpresa extends Model
{
    protected $table = "dados_empresas";

    protected $fillable = ["nome_delivery", "site", "cep", "endereco", "numero", "bairro", "complemento", "cidade", "uf", "celular", "email", "user_id"];

    // relacionamentos
    public function usuario()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}

