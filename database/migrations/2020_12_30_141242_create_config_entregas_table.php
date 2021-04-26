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
            $table->boolean("pedido_minimo");
            $table->float("pedido_minimo_valor");
            $table->time("tempo_minimo");
            $table->time("tempo_maximo");
            $table->float("taxa_entrega");
            $table->float("multiplicador_taxa_entrega");
            $table->float("area_maxima");
            $table->boolean("integracao_loggi");
            $table->boolean("integracao_rapiddo");
            $table->boolean("retirada_loja");
            $table->time("tempo_retirada");
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
