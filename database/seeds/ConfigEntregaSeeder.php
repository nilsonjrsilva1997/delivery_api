<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigEntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('config_entregas')->insert([
            "pedido_minimo" => true,
            "pedido_minimo_valor" => 20,
            "taxa_entrega" => 5,
            "multiplicador_taxa_entrega" => 0.5,
            "area_maxima" => 5,
            "tempo_maximo" => '00:55',
            "tempo_minimo" => '00:30',
            "integracao_loggi" => false,
            "integracao_rapiddo" => false,
            "retirada_loja" => true,
            "tempo_retirada" => '00:30',
            "unidade_id" => '1',
        ]);
    }
}
