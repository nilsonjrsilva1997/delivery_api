<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    protected $table = "uploadfiles";

    protected $fillable = ["foto1", "foto2", "nome", "foto3", ];

    // relacionamentos
}

