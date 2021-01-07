<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdicionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("adicionais", function (Blueprint $table) {
            $table->id();
            $table->integer("produto_id");
            $table->string("titulo");
            $table->float("valor");
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
        Schema::dropIfExists("adicionais");
    }
}
