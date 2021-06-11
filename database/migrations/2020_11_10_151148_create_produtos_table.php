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
            $table->boolean('estoque')->default(false);
            $table->integer("quantidade");
            $table->boolean('esconder_esgotado')->default(false);
            $table->string("descricao");
            $table->float("valor_anterior");
            $table->float("valor_atual");
            $table->boolean("promocao")->default(false);
            $table->integer("unidade_id");
            $table->integer("categoria_id");
            $table->integer('dia_semana_id');
            $table->string("foto");
            $table->enum("status", ["ATIVO", "INATIVO"])->default("ATIVO");
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
