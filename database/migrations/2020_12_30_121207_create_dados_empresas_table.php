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
            $table->string("site")->nullable();
            $table->string("telefone");
            $table->string("email");
            $table->string("telefone_financeiro")->nullable();
            $table->string("email_financeiro")->nullable();
            $table->integer("unidade_id");
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
