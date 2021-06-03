<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("permissoes", function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("unidade_id");
            $table->enum('tipo', ['ADMINISTRADOR', 'GERENTE', 'FUNCIONARIO']);
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
        Schema::dropIfExists("permissoes");
    }
}


