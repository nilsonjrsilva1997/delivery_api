<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurantes')->insert([
            [
                'nome' => 'Beach burguer',
                'slug' => 'beach-burguer',
                'user_id' => 1,
            ],
        ]);
    }
}
