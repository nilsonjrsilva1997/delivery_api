<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;

class SobreNos extends Model
{
    protected $fillable = ['facebook', 'instagram', 'unidadeId'];

    protected $table = 'sobre_nos';

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidadeId', 'id');
    }
}
