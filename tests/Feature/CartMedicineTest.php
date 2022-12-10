<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartMedicineTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('api/cartMedicine/1');

        $response->assertStatus(200)
            ->assertJson([
                "id" => 1,
                "created_at" => "2022-12-10T08:46:32.000000Z",
                "updated_at" => "2022-12-10T08:46:34.000000Z",
                "cart_id" => 1,
                "medicine_id" => 1
            ]);
    }
}
