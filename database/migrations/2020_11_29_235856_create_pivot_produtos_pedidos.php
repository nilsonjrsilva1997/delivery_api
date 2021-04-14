<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotProdutosPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pivot_produtos_pedidos", function (Blueprint $table) {
            $table->id();
            $table->integer("pedido_id");
            $table->integer("produto_id");
            $table->string("nome");
            $table->integer("quantidade");
            $table->float("valor_anterior");
            $table->float("valor_atual");
            $table->float("valor_total");
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
        Schema::dropIfExists("pivot_produtos_pedidos");
    }
}
