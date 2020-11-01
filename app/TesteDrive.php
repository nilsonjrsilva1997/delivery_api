<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesteDrive extends Model
{
    protected $table = "testedrives";

    protected $fillable = ["teste", "idade", "testeString", ];

    // relacionamentos
}

