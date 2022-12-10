<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShoppingCartTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('api/shoppingCart/1');

        $response->assertStatus(200)
            ->assertJson([
                "id" => 1,
                "quantity" => 2,
                "created_at" => "2022-12-10T08:38:02.000000Z",
                "updated_at" => "2022-12-10T08:38:02.000000Z",
                "user_id" => 1,
            ]);
    }
}
