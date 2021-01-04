<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("dados_empresas", function (Blueprint $table) {
            $table->id();
            $table->string("nome_delivery");
            $table->string("site");
            $table->string("cep");
            $table->string("endereco");
            $table->integer("numero");
            $table->string("bairro");
            $table->string("complemento");
            $table->string("cidade");
            $table->string("uf");
            $table->string("celular");
            $table->string("email");
            $table->integer("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("dados_empresas");
    }
}


