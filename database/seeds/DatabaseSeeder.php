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
        $this->call([
            FormaPagamentoSeeder::class,
            DiasDaSemanaSeeder::class,
            UserSeeder::class,
            RestauranteSeeder::class,
            UnidadeSeeder::class,
            UnidadeEnderecoSeeder::class,
            TempoEsperaSeeder::class,
            SobreNosSeeder::class,
            ProdutoCategoriaSeeder::class,
            ProdutoSeeder::class,
            ProdutoAdicionalSeeder::class,
            ProdutoOpcaoSeeder::class,
            DadosEmpresaSeeder::class,
            UserEnderecoSeeder::class,
        ]);
    }
}
