<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotPedidosAdicionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pivot_pedidos_adicionais", function (Blueprint $table) {
            $table->id();
            $table->integer("adicional_id");
            $table->integer("produto_pedido_id");
            $table->string("titulo");
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
        Schema::dropIfExists("pivot_pedidos_adicionais");
    }
}
