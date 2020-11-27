<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_log', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->integer("quantidade");
            $table->string("descricao");
            $table->float("valorAnterior");
            $table->float("valorAtual");
            $table->integer("unidadeId");
            $table->integer("categoriaId");
            $table->string("foto");
            $table->integer("produtoId");
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
        Schema::dropIfExists('produto_log');
    }
}
