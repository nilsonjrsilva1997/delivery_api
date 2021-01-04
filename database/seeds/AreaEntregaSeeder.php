<?php

use Illuminate\Database\Seeder;

class AreaEntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_entregas')->insert([
            'descricao' => 'Meu cantinho de teste',
            'preco' => 3
        ]);

        DB::table('area_entregas')->insert([
            'descricao' => 'Brasília Tosca',
            'preco' => 55
        ]);

        DB::table('area_entregas')->insert([
            'descricao' => 'Area de entrega',
            'preco' => 0
        ]);

        DB::table('area_entregas')->insert([
            'descricao' => 'Area de entrega',
            'preco' => 0.5
        ]);

        DB::table('area_entregas')->insert([
            'descricao' => 'Baixada santista',
            'preco' => 12
        ]);

        DB::table('area_entregas')->insert([
            'descricao' => 'Região de SP 11',
            'preco' => 25
        ]);
    }
}
