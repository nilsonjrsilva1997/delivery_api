<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unidade;

class SobreNos extends Model
{
    protected $fillable = ['facebook', 'instagram', 'unidade_id'];

    protected $table = 'sobre_nos';

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidade_id', 'id');
    }
}
