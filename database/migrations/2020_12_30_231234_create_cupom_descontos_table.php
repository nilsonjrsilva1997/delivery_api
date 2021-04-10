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
        Schema::create("cupom_descontos", function (Blueprint $table) {
            $table->id();
            $table->string("codigo");
            $table->enum("tp_beneficio", ["DESCONTO", "OUTRO"]);
            $table->enum("sufixo_beneficio", ["VALOR", "PORCENTAGEM"]);
            $table->float("valor_beneficio")->nullable();
            $table->string("beneficio_descricao")->nullable();
            $table->integer("usos");
            $table->enum("status", ["ATIVADO", "DESATIVO"]);
            $table->date("validade");
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
        Schema::dropIfExists("cupom_descontos");
    }
}
