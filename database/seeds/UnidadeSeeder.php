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
            'foto' => 'https://source.unsplash.com/random',
            'banner' => 'https://source.unsplash.com/random',
            'cor_categoria' => '#000000',
            'cor_fundo' => '#000000',
            'restaurante_id' => 1,
        ]);

        DB::table('permissoes')->insert([
            "user_id" => 1,
            "unidade_id" => 1,
            "tipo" => "ADMINISTRADOR",
        ]);
    }
}
