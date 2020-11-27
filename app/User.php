<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Pedido;
use App\EnderecoEntrega;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_completo', 'email', 'password', 'aniversario', 'celular', 'tp_user'
    ];  
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // relacionamentos
    public function endereco_entrega()
    {
        return $this->hasMany(EnderecoEntrega::class);
    }

    // public function pedido_logs()
    // {
    //     return $this->hasMany(PedidoLog::class);
    // }

}
