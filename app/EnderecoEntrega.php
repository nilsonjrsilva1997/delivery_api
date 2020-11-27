<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class EnderecoEntrega extends Model
{
    protected $fillable = ["cep", "estado", "rua", "cidade", "complemento", "bairro", "numero", "user_id"];

    protected $table = "enderecos_entrega";

    public function usuario()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
