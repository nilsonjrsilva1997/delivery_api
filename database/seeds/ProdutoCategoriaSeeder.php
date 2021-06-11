<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['nome' => 'Lanches', 'descricao' => '', 'plano_fundo' => 'https://source.unsplash.com/random', 'unidade_id' => 1],
            ['nome' => 'Porções', 'descricao' => '', 'plano_fundo' => 'https://source.unsplash.com/random', 'unidade_id' => 1],
            ['nome' => 'Bebidas', 'descricao' => 'Pra matar sua sede', 'plano_fundo' => 'https://source.unsplash.com/random', 'unidade_id' => 1],
            ['nome' => 'Sobremesas', 'descricao' => '', 'plano_fundo' => 'https://source.unsplash.com/random', 'unidade_id' => 1],
        ]);
    }
}
