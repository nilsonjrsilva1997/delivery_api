<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriaCardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoriacardapios')->insert([
            'nome' => 'Burgers',
        ]);

        DB::table('categoriacardapios')->insert([
            'nome' => 'Prime Steakes',
        ]);

        DB::table('categoriacardapios')->insert([
            'nome' => 'Milkshakes',
        ]);

        DB::table('categoriacardapios')->insert([
            'nome' => 'Sobremesas',
        ]);

        DB::table('categoriacardapios')->insert([
            'nome' => 'Promoções',
        ]);
        
        DB::table('categoriacardapios')->insert([
            'nome' => 'Saladas',
        ]);

        DB::table('categoriacardapios')->insert([
            'nome' => 'Massas caseiras',
        ]);
    }
}
