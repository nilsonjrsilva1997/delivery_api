<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function indexTest() 
    {
        $response = $this->post('/product/store', [
      'name' => 'Hello'
    ])
    ->assertStatus(302);
    }

    // public function testExample()
    // {
    //     $this->get('/categoria_servico/create')->assertStatus(200);
    //     $this->get('/categoria_servico/create')->assertViewHas('fornecedor');
    //     $this->get('/categoria_servico')->assertStatus(200);
    //     $this->get('/categoria_servico')->assertViewHas('carteira');
    // }
}
