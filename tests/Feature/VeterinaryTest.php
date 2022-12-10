<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VeterinaryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('api/veterinary/1');

        $response->assertStatus(200)
            ->assertJson([
                "id" => 1,
                "name" => "Carlos",
                "phone" => "3015549634",
                "email" => "carlos@gmail.com",
                "created_at" => "2022-12-10T07:55:40.000000Z",
                "updated_at" => "2022-12-10T07:55:41.000000Z"
            ]);
    }
}
