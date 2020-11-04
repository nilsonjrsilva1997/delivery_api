<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCupomDescontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("cupomdescontos", function (Blueprint $table) {
            $table->id();
            $table->enum("prefixo", ["PORCENTAGEM", 'DINHEIRO']);
            $table->float("valor");
            $table->date("data");
            $table->string("codigo");
            $table->boolean("umCliente");
            
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
        Schema::dropIfExists("cupomdescontos");
    }
}


