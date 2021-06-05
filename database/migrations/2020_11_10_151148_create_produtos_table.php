<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("produtos", function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->integer("quantidade");
            $table->string("descricao");
            $table->float("valor_anterior");
            $table->float("valor_atual");
            $table->boolean("promocao")->default(false);
            $table->integer("unidade_id");
            $table->integer("categoria_id");
            $table->string("foto");
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
        Schema::dropIfExists("produtos");
    }
}
