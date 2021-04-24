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
            $table->integer("user_id");
            $table->enum("status_pedido", [
                "EM_ANALISE",
                "REPROVADO",
                "APROVADO",
                "PREPARANDO",
                "ESPERANDO_RETIRADA",
                "EM_TRANSITO",
                "FINALIZADO"
            ]);
            $table->integer("taxa_entrega");
            $table->integer("enderecos_entrega_id");
            $table->integer("cupom_desconto_id")->nullable();
            $table->integer("unidade_id");
            $table->string('cpf')->nullable();
            $table->text('observacao')->nullable();

            $table->float("subtotal");
            $table->float("desconto");
            $table->float("subtotal_desconto");
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
        Schema::dropIfExists("pedidos");
    }
}
