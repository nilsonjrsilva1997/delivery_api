<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("opcaos", function (Blueprint $table) {
            $table->id();
            $table->integer("adicionalId");
            $table->string("nome");
            $table->string("descricao");
            $table->string("imagem");
            $table->boolean("disponivel");
            $table->float("valor");
            
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
        Schema::dropIfExists("opcaos");
    }
}


