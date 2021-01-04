<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaCardapioSeeder::class);
        $this->call(FormaPagamentoSeeder::class);
        // $this->call(AreaEntregaSeeder::class);
        $this->call(DiasDaSemanaSeeder::class);
    }
}
