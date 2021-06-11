<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Unidade;
use App\Adicional;
use App\Pedido;
use App\ProdutoPedido;

class Produto extends Model
{
    protected $table = "produtos";

    protected $fillable = [
        "nome",
        "estoque",
        "quantidade",
        "esconder_esgotado",
        "descricao",
        "valor_anterior",
        "promocao",
        "valor_atual",
        "unidade_id",
        "categoria_id",
        "foto",
        "status",
        "dia_semana_id"
    ];

    protected $casts = [
        "promocao" => "boolean",
        "estoque" => "boolean",
        "esconder_esgotado" => "boolean",
    ];

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    public function adicional()
    {
        return $this->hasMany(Adicional::class);
    }

    public function opcao()
    {
        return $this->hasMany(Opcao::class);
    }

    public function produto_pedido()
    {
        return $this->hasMany(ProdutoPedido::class);
    }

    public function dia_semana()
    {
        return $this->hasOne(DiasSemanaHorarioDelivery::class, 'dia_semana_id', 'id');
    }
}
