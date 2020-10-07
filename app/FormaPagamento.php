<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    protected $fillable = ['nome'];

    protected $table = 'forma_pagamentos';
}
