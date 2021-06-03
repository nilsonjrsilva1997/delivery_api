<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserEnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('enderecos_entrega')->insert([
            [
                "cep" => '11380310',
                "estado" => 'SP',
                "rua" => 'Rua São jorge',
                "cidade" => 'São Vicente',
                "complemento" => 'Casa',
                "bairro" => 'Vila Voturua',
                "numero" => '591',
                "user_id" => '1',
                'lat' => -23.958227,
                'lng' => -46.371064,
            ]
        ]);
    }
}
