<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PetOwnerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('api/petOwner/1');

        $response->assertStatus(200)
            ->assertJson([
                "id" => 1,
                "name" => "pedro",
                "phone" => "3052416789",
                "email" => "pedro@gmail.com",
                "address" => "manizales",
                "created_at" => "2022-12-10 08:18:45",
                "updated_at" => "2022-12-10 08:18:44",
                "password" => "hola",
            ]);
    }
}
