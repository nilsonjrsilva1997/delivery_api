<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Entregador extends Model
{
    protected $table = "entregadors";

    protected $fillable = ["codigo", "nome", "user_id"];

    // relacionamentos
    public function usuario()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}

