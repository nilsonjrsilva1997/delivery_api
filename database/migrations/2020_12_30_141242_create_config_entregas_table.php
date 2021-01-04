<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("config_entregas", function (Blueprint $table) {
            $table->id();
            $table->float("pedido_minimo_delivery");
            $table->integer("tempo_espera_min");
            $table->integer("tempo_espera_max");
            $table->boolean("integracao_loggi");
            $table->boolean("integracao_rapiddo");
            $table->boolean("retirada_loja");
            $table->integer("tempo_retirada");
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
        Schema::dropIfExists("config_entregas");
    }
}


