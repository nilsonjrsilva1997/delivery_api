<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;
use Illuminate\Support\Facades\Storage;

class Categoria extends Model
{
    protected $fillable = ['nome', 'descricao', 'plano_fundo', 'unidade_id'];

    protected $table = 'categorias';

    public function getPlanoFundoAttribute($plano_fundo)
    {
        if (str_contains($plano_fundo, 'http')) {
            return $plano_fundo;
        }

        return asset('/storage/images/' . $plano_fundo);
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
