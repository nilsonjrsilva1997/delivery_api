<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("opcoes", function (Blueprint $table) {
            $table->id();
            $table->integer("adicional_id");
            $table->string("titulo");
            $table->string("descricao");
            $table->boolean("disponivel");
            $table->decimal("valor", 9, 2);
            $table->string("imagem");
            $table->float("maximo");
            $table->float("minimo");
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
        Schema::dropIfExists("opcoes");
    }
}
