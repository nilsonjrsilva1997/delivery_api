<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('periodos')->insert([
            /* Domingo */
            [
                'hora_inicial' => '08:00',
                'hora_final' => '16:00',
                'dia_semana_id' =>  1,
            ],

            /* Segunda */
            [
                'hora_inicial' => '08:00',
                'hora_final' => '14:00',
                'dia_semana_id' =>  2,
            ],
            [
                'hora_inicial' => '18:00',
                'hora_final' => '22:00',
                'dia_semana_id' =>  2,
            ],

            /* Terça */
            [
                'hora_inicial' => '08:00',
                'hora_final' => '14:00',
                'dia_semana_id' =>  3,
            ],
            [
                'hora_inicial' => '18:00',
                'hora_final' => '22:00',
                'dia_semana_id' =>  3,
            ],

            /* Quarta */
            [
                'hora_inicial' => '08:00',
                'hora_final' => '14:00',
                'dia_semana_id' =>  4,
            ],
            [
                'hora_inicial' => '18:00',
                'hora_final' => '22:00',
                'dia_semana_id' =>  4,
            ],

            /* Quinta */
            [
                'hora_inicial' => '08:00',
                'hora_final' => '14:00',
                'dia_semana_id' =>  5,
            ],
            [
                'hora_inicial' => '18:00',
                'hora_final' => '22:00',
                'dia_semana_id' =>  5,
            ],

            /* Sexta */
            [
                'hora_inicial' => '08:00',
                'hora_final' => '14:00',
                'dia_semana_id' =>  6,
            ],
            [
                'hora_inicial' => '18:00',
                'hora_final' => '22:00',
                'dia_semana_id' =>  6,
            ],

            /* Sabado */
            [
                'hora_inicial' => '08:00',
                'hora_final' => '16:00',
                'dia_semana_id' =>  7,
            ],
        ]);

        DB::table('horario_funcionamento_deliverys')->insert([
            /* Domingo */
            [
                "periodo1_id" => 1,
                "periodo2_id" => null,
                "unidade_id" => 1,
                "pedidos_agendados" => true,
                "fuso_horario_id" => 1,
            ],

            /* Segunda */
            [
                "periodo1_id" => 2,
                "periodo2_id" => 3,
                "unidade_id" => 1,
                "pedidos_agendados" => true,
                "fuso_horario_id" => 1,
            ],

            /* Terça */
            [
                "periodo1_id" => 4,
                "periodo2_id" => 5,
                "unidade_id" => 1,
                "pedidos_agendados" => true,
                "fuso_horario_id" => 1,
            ],

            /* Quarta */
            [
                "periodo1_id" => 6,
                "periodo2_id" => 7,
                "unidade_id" => 1,
                "pedidos_agendados" => true,
                "fuso_horario_id" => 1,
            ],

            /* Quinta */
            [
                "periodo1_id" => 8,
                "periodo2_id" => 9,
                "unidade_id" => 1,
                "pedidos_agendados" => true,
                "fuso_horario_id" => 1,
            ],

            /* Sexta */
            [
                "periodo1_id" => 10,
                "periodo2_id" => 11,
                "unidade_id" => 1,
                "pedidos_agendados" => true,
                "fuso_horario_id" => 1,
            ],

            /* Sábado */
            [
                "periodo1_id" => 12,
                "periodo2_id" => null,
                "unidade_id" => 1,
                "pedidos_agendados" => true,
                "fuso_horario_id" => 1,
            ],
        ]);
    }
}
