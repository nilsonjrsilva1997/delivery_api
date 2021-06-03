<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DadosEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dados_empresas')->insert([
            [
                "site" => 'https://beachburguer.com.br',
                "telefone" => '(13) 99103-1783',
                "email" => 'jhonnatthans@outlook.com',
                "telefone_financeiro" => '(13) 99103-1783',
                "email_financeiro" => 'jhonnatthans@outlook.com',
                "unidade_id" => '1',
            ]
        ]);
    }
}
