<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoOpcaoSeeder extends Seeder
{

    public function opcaoPao($adicional_id)
    {
        return [
            [
                "adicional_id" => $adicional_id,
                "titulo" => 'Pão tradicional',
                "descricao" => '',
                "disponivel" => 1,
                "valor" => 0,
                "imagem" => 'logo.png',
                "maximo" => 1,
                "minimo" => 0,
            ],
            [
                "adicional_id" => $adicional_id,
                "titulo" => 'Ovo',
                "descricao" => '',
                "disponivel" => 1,
                "valor" => 2,
                "imagem" => 'logo.png',
                "maximo" => 1,
                "minimo" => 0,
            ],
            [
                "adicional_id" => $adicional_id,
                "titulo" => 'Pão brioche',
                "descricao" => '',
                "disponivel" => 1,
                "valor" => 2,
                "imagem" => 'logo.png',
                "maximo" => 1,
                "minimo" => 0,
            ]
        ];
    }

    public function opcaoComplemento($adicional_id)
    {
        return [
            [
                "adicional_id" => $adicional_id,
                "titulo" => 'Queijo Cheddar',
                "descricao" => 'O melhor queijo',
                "disponivel" => 1,
                "valor" => 2,
                "imagem" => 'logo.png',
                "maximo" => 1,
                "minimo" => 0,
            ],
            [
                "adicional_id" => $adicional_id,
                "titulo" => 'Ovo',
                "descricao" => 'O jeitinho brasileiro',
                "disponivel" => 1,
                "valor" => 2,
                "imagem" => 'logo.png',
                "maximo" => 1,
                "minimo" => 0,
            ],
            [
                "adicional_id" => $adicional_id,
                "titulo" => 'Queijo Prato',
                "descricao" => 'Aquele gostinho diferenciado',
                "disponivel" => 1,
                "valor" => 2,
                "imagem" => 'logo.png',
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
        DB::table('opcoes')->insert(array_merge(
            $this->opcaoPao(1),
            $this->opcaoComplemento(2),
            $this->opcaoPao(3),
            $this->opcaoComplemento(4),
            $this->opcaoPao(5),
            $this->opcaoComplemento(6),
            [
                [
                    "adicional_id" => 7,
                    "titulo" => 'Queijo Prato',
                    "descricao" => 'Aquele gostinho diferenciado',
                    "disponivel" => 1,
                    "valor" => 2,
                    "imagem" => 'logo.png',
                    "maximo" => 1,
                    "minimo" => 0,
                ],
                [
                    "adicional_id" => 8,
                    "titulo" => '500g',
                    "descricao" => '',
                    "disponivel" => 1,
                    "valor" => 2,
                    "imagem" => 'logo.png',
                    "maximo" => 1,
                    "minimo" => 0,
                ],
                [
                    "adicional_id" => 8,
                    "titulo" => '750g',
                    "descricao" => '',
                    "disponivel" => 1,
                    "valor" => 7,
                    "imagem" => 'logo.png',
                    "maximo" => 1,
                    "minimo" => 0,
                ]
            ]
        ));
    }
}
