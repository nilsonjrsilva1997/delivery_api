<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Pedido;
use App\EnderecoEntrega;
use App\Resposta;
use App\Entregador;
use App\Restaurante;
use App\UsuarioUnidade;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_completo', 'cpf', 'email', 'password', 'aniversario', 'celular', 'tp_user'
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

    public function pedido()
    {
        return $this->hasMany(Pedido::class);
    }

    public function resposta()
    {
        return $this->hasMany(Resposta::class);
    }

    public function entregador()
    {
        return $this->hasMany(Entregador::class);
    }

    public function restaurante()
    {
        return $this->hasMany(Restaurante::class);
    }

    public function usuario_unidades()
    {
        return $this->hasMany(UsuarioUnidade::class);
    }

    public function permissao()
    {
        return $this->hasMany(\App\Permissao::class);
    }
}
