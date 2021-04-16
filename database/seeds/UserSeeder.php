<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nome_completo' => 'Jhonnatthan Santana',
                'email' => 'jhonnatthans@outlook.com',
                'password' => bcrypt('123456'),
                'tp_user' => 'ADM',
                'celular' => '(13) 99103-1783',
                'aniversario' => '1997-12-11',
            ],
        ]);
    }
}
