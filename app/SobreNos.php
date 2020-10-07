<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurante;

class SobreNos extends Model
{
    protected $fillable = ['facebook', 'instagram', 'restaurante_id'];

    protected $table = 'sobre_nos';

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class, 'restaurante_id', 'id');
    }
}
