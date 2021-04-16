<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TempoEsperaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tempo_espera_entregas')->insert([
            [
                'tempo_minimo' => '00:30',
                'tempo_maximo' => '00:50',
                'unidade_id' => 1,
            ]
        ]);
    }
}
