<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SobreNosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('sobre_nos')->insert([
            [
                'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus mauris lorem, ut sagittis ligula consequat non. Mauris ultricies cursus fermentum. Vivamus pretium, velit in ultrices blandit, orci augue molestie dui, non laoreet nunc nunc varius nibh. Mauris eu orci suscipit, dictum velit ac, tincidunt mauris. Duis sagittis commodo tempor. Sed et lacinia magna. In hac habitasse platea dictumst. Aliquam non sem eros. Integer felis enim, mollis in viverra sit amet, porta et diam. Pellentesque ac sagittis diam, a fringilla metus. Quisque et ex in neque gravida lobortis. Integer semper finibus arcu in congue. Proin luctus convallis sem, lacinia rhoncus risus laoreet porta. Integer vitae nulla non lacus bibendum posuere. Praesent et orci neque. Nunc sit amet eros nec eros placerat pharetra a non diam. Quisque non posuere massa. Curabitur nunc dolor, faucibus tristique tristique in, mollis nec erat. In ullamcorper euismod vestibulum. In mattis augue egestas, ornare purus nec, ullamcorper diam. Aliquam ornare pretium justo bibendum sollicitudin. Quisque lorem felis, tincidunt quis nulla et, pulvinar fringilla velit. In hac habitasse platea dictumst.',
                'facebook' => 'https://www.facebook.com/beachburguer/',
                'instagram' => 'https://www.instagram.com/beachburguer/',
                'unidade_id' => 1,
            ]
        ]);
    }
}
