<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotPedidoAdicionalOpcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pivot_pedido_adicional_opcoes", function (Blueprint $table) {
            $table->id();
            $table->integer("opcao_id");
            $table->integer("pedido_adicional_id");
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
        Schema::dropIfExists("pivot_pedido_adicional_opcoes");
    }
}
