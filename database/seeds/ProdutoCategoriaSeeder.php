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
            ['nome' => 'Lanches', 'unidade_id' => 1],
            ['nome' => 'Porções', 'unidade_id' => 1],
            ['nome' => 'Bebidas', 'unidade_id' => 1],
            ['nome' => 'Sobremesas', 'unidade_id' => 1],
        ]);
    }
}
