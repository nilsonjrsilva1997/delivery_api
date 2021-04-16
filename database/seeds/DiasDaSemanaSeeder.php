<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiasDaSemanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dias_semana_horario_deliverys')->insert([
            ['nome' => 'Domingo'],
            ['nome' => 'Segunda-Feira'],
            ['nome' => 'Terça-Feira'],
            ['nome' => 'Quarta-Feira'],
            ['nome' => 'Sexta-Feira'],
            ['nome' => 'Sábado'],
        ]);
    }
}
