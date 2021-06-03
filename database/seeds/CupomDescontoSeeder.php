<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CupomDescontoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cupom_descontos')->insert([
            [
                "codigo" => "LANCAMENTO25",
                "tp_beneficio" => "DESCONTO",
                "sufixo_beneficio" => "PORCENTAGEM",
                "valor_beneficio" => "25",
                "beneficio_descricao" => "Cupom de 25% de desconto para o lançamento da plataforma",
                "usos" => "1000",
                "status" => "ATIVADO",
                "validade" => "2021-12-01",
                "unidade_id" => "1",
            ],
            [
                "codigo" => "LANCAMENTO50",
                "tp_beneficio" => "DESCONTO",
                "sufixo_beneficio" => "VALOR",
                "valor_beneficio" => "50",
                "beneficio_descricao" => "Cupom de R$ 50,00 de desconto para o lançamento da plataforma",
                "usos" => "1000",
                "status" => "ATIVADO",
                "validade" => "2021-12-01",
                "unidade_id" => "1",
            ]
        ]);
    }
}
