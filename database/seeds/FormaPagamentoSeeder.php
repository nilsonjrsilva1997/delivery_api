<?php

use Illuminate\Database\Seeder;

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
            'nome' => 'Alelo',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Diners Club',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Elo',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'M. Maestro (débito)',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Sodexo',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Visa Electron (débito)',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'American Express',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Dinheiro',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Greem Card Refeição',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Mastercard',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Ticket Restaurante',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'VR',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Banrisul',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Discover',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Hipercard',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Redeshop',
        ]);

        DB::table('forma_pagamentos')->insert([
            'nome' => 'Visa (crédito)',
        ]);
    }
}
