<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidades')->insert([
            'nome' => 'Santos',
            'slug' => 'santos',
            'foto' => 'Sem Título-1_1618419320.png',
            'banner' => 'Sem Título-1_1618419320.png',
            'taxa_entrega' => 5,
            'restaurante_id' => 1,
        ]);
    }
}
