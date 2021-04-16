<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            [
                "nome" => 'Chesse Salad Burguer',
                "quantidade" => 20,
                "descricao" => 'Hamburguer de 150g com muito queijo',
                "valor_anterior" => 22.5,
                "valor_atual" => 18,
                "unidade_id" => 1,
                "categoria_id" => 1,
                "foto" => 'Sem Título-1_1617827447.png',
            ],
            [
                "nome" => 'Super Cheddar Burguer',
                "quantidade" => 20,
                "descricao" => 'Hamburguer de 150g com muito cheddar',
                "valor_anterior" => 25.5,
                "valor_atual" => 21,
                "unidade_id" => 1,
                "categoria_id" => 1,
                "foto" => 'Sem Título-1_1617827447.png',
            ],
            [
                "nome" => 'Special Chicken',
                "quantidade" => 20,
                "descricao" => 'Hamburguer de frango de 150g com muito catupiry',
                "valor_anterior" => 19,
                "valor_atual" => 19,
                "unidade_id" => 1,
                "categoria_id" => 1,
                "foto" => 'Sem Título-1_1617827447.png',
            ],
            [
                "nome" => 'Porção de Fritas',
                "quantidade" => 20,
                "descricao" => '500g de fritas',
                "valor_anterior" => 19,
                "valor_atual" => 15,
                "unidade_id" => 1,
                "categoria_id" => 2,
                "foto" => 'Sem Título-1_1617827447.png',
            ],
            [
                "nome" => 'Coca cola 2l',
                "quantidade" => 20,
                "descricao" => 'Muito refrescante',
                "valor_anterior" => 12,
                "valor_atual" => 8,
                "unidade_id" => 1,
                "categoria_id" => 3,
                "foto" => 'Sem Título-1_1617827447.png',
            ],
            [
                "nome" => 'Açai',
                "quantidade" => 20,
                "descricao" => 'O melhor açai do Brasil',
                "valor_anterior" => 10,
                "valor_atual" => 10,
                "unidade_id" => 1,
                "categoria_id" => 4,
                "foto" => 'Sem Título-1_1617827447.png',
            ],
        ]);
    }
}
