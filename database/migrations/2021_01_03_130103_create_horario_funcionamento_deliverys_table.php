<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioFuncionamentoDeliverysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("horario_funcionamento_deliverys", function (Blueprint $table) {
            $table->id();
            $table->integer("periodo1_id")->nullable();
            $table->integer("periodo2_id")->nullable();
            $table->integer("unidade_id");
            $table->boolean("pedidos_agendados");
            $table->integer("fuso_horario_id");
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
        Schema::dropIfExists("horario_funcionamento_deliverys");
    }
}
