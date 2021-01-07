<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pedidos", function (Blueprint $table) {
            $table->id();
            $table->float("valor_total");
            $table->integer("user_id");
            $table->enum("status_pedido", ["EM_ANALISE", "REPROVADO", "APROVADO", "PREPARANDO", "EM_TRANSITO"]);
            $table->integer("enderecos_entrega_id");
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
        Schema::dropIfExists("pedidos");
    }
}


