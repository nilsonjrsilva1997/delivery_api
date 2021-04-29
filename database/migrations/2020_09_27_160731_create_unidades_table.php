<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('banner');
            $table->string('foto');
            $table->string('cor_categoria')->default('#000000');
            $table->string('cor_fundo')->default('#eeeeee');
            $table->integer('restaurante_id');
            $table->string("slug");
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
        Schema::dropIfExists('unidades');
    }
}
