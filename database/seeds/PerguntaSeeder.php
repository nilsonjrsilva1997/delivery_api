<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pergunta')->insert([
            ['pergunta' => 'Qual é a probabilidade de você recomendar este estabelecimento para um amigo ou colega?'],
            ['pergunta' => 'O quanto você recomendaria o concorrente para um amigo ou familiar?'],
            ['pergunta' => 'O que podemos fazer para melhorar nossos produtos ou serviços?'],
            ['pergunta' => 'O quão satisfeito você está com o nosso serviço de atendimento?'],
            ['pergunta' => 'O que poderíamos fazer para tornar sua experiência como consumidor ainda melhor?']
        ]);
    }
}
