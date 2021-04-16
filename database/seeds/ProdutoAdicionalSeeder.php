<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoAdicionalSeeder extends Seeder
{

    public function hamburguerAdicional($produto_id)
    {
        return [
            [
                "produto_id" => $produto_id,
                "titulo" => 'Pão',
                "valor" => 0,
                "maximo" => 1,
                "minimo" => 1,
            ],
            [
                "produto_id" => $produto_id,
                "titulo" => 'Complemento',
                "valor" => 0,
                "maximo" => 1,
                "minimo" => 0,
            ]
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('adicionais')->insert(array_merge(
            $this->hamburguerAdicional(1),
            $this->hamburguerAdicional(2),
            $this->hamburguerAdicional(3),
            [
                [
                    "produto_id" => 4,
                    "titulo" => 'Complemento',
                    "valor" => 0,
                    "maximo" => 1,
                    "minimo" => 0,
                ],
                [
                    "produto_id" => 6,
                    "titulo" => 'Tamanho',
                    "valor" => 10,
                    "maximo" => 1,
                    "minimo" => 1,
                ],
            ]
        ));
    }
}
