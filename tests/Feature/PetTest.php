<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PetTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show()
    {
        $response = $this->get('api/pet/1');

        $response->assertStatus(200)
            ->assertJson([
                "id" => 1,
                "name" => "Lola",
                "sex" => "F",
                "age" => 20,
                "color" => "verde",
                "weight" => 14,
                "breed" => "pastor alemán",
                "created_at" => "2022-12-10T01:59:52.000000Z",
                "updated_at" => "2022-12-10T01:59:52.000000Z",
                "id_pet_owner" => 1
            ]);
    }
    // public function test_index()
    // {
    //     $response = $this->get('api/pets');

    //     $response->assertStatus(200)
    //         ->assertJson([
    //             [
    //                 "id" => 1,
    //                 "name" => "Lola",
    //                 "sex" => "F",
    //                 "age" => 20,
    //                 "color" => "verde",
    //                 "weight" => 14,
    //                 "breed" => "pastor alemán",
    //                 "created_at" => "2022-12-10T01:59:52.000000Z",
    //                 "updated_at" => "2022-12-10T01:59:52.000000Z",
    //                 "id_pet_owner" => 1
    //             ],
    //             [
    //                 "id" => 2,
    //                 "name" => "Luna",
    //                 "sex" => "F",
    //                 "age" => 20,
    //                 "color" => "verde",
    //                 "weight" => 14,
    //                 "breed" => "p",
    //                 "created_at" => "2022-12-10T01:59:52.000000Z",
    //                 "updated_at" => "2022-12-10T01:59:52.000000Z",
    //                 "id_pet_owner" => 1

    //             ]
    //         ]);
    // }
}
