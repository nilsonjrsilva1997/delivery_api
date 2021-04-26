<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FusoHorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fuso_horarios')->insert([
            'nome' => 'Brasília/DF'
        ]);
    }
}
