<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("enderecoestabelecimentos", function (Blueprint $table) {
            $table->id();
            $table->string("cep");
            $table->string("estado");
            $table->string("rua");
            $table->string("cidade");
            $table->string("complemento");
            $table->string("bairro");
            $table->string("numero");
            $table->integer("restauranteId");

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
        Schema::dropIfExists("enderecoestabelecimentos");
    }
}
