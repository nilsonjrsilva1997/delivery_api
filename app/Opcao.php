<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;
use App\PedidoAdicionalOpcao;

class Opcao extends Model
{
    protected $table = "opcoes";

    protected $fillable = ["adicional_id", "titulo", "descricao", "disponivel", "valor", "imagem", "maximo", "minimo"];

    public function getImagemAttribute($imagem)
    {
        if (str_contains($imagem, 'http')) {
            return $imagem;
        }

        return asset('/storage/images/' . $imagem);
    }

    // relacionamentos
    public function adicional()
    {
        return $this->belongsTo(Adicional::class, "adicional_id", "id");
    }

    public function pedido_adicional_opcao()
    {
        return $this->hasMany(PedidoAdicionalOpcao::class);
    }
}
