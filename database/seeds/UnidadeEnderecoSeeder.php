<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadeEnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('endereco_unidades')->insert([
            'cep' => '11380310',
            'estado' => 'SP',
            'cidade' => 'São Vicente',
            'bairro' => 'Vila Voturua',
            'rua' => 'Rua São Jorge',
            'numero' => '591',
            'complemento' => 'Casa',
            'unidade_id' => '1',
            'lat' => -23.958227,
            'lng' => -46.371064,
        ]);
    }
}
