<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormaPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forma_pagamentos')->insert([
            ['nome' => 'Alelo', 'icone' => ''],
            ['nome' => 'Diners Club', 'icone' => ''],
            ['nome' => 'Elo', 'icone' => ''],
            ['nome' => 'M. Maestro (débito)', 'icone' => 'maestro-debito.png'],
            ['nome' => 'Sodexo', 'icone' => ''],
            ['nome' => 'Visa Electron (débito)', 'icone' => 'visa-debito.png'],
            ['nome' => 'American Express', 'icone' => ''],
            ['nome' => 'Dinheiro', 'icone' => 'money.png'],
            ['nome' => 'Greem Card Refeição', 'icone' => ''],
            ['nome' => 'Mastercard', 'icone' => 'master-credito.png'],
            ['nome' => 'Ticket Restaurante', 'icone' => ''],
            ['nome' => 'VR', 'icone' => ''],
            ['nome' => 'Banrisul', 'icone' => ''],
            ['nome' => 'Discover', 'icone' => ''],
            ['nome' => 'Hipercard', 'icone' => ''],
            ['nome' => 'Redeshop', 'icone' => 'redeshop.png'],
            ['nome' => 'Visa (crédito)', 'icone' => 'visa-credito.png'],
        ]);
    }
}
