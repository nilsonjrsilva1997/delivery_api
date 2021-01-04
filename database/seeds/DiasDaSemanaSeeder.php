<?php

use Illuminate\Database\Seeder;

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
            'nome' => 'Domingo',
        ]);

        DB::table('dias_semana_horario_deliverys')->insert([
            'nome' => 'Segunda-Feira',
        ]);

        DB::table('dias_semana_horario_deliverys')->insert([
            'nome' => 'Terça-Feira',
        ]);

        DB::table('dias_semana_horario_deliverys')->insert([
            'nome' => 'Quarta-Feira',
        ]);

        DB::table('dias_semana_horario_deliverys')->insert([
            'nome' => 'Sexta-Feira',
        ]);

        DB::table('dias_semana_horario_deliverys')->insert([
            'nome' => 'Sábado',
        ]);
    }
}
