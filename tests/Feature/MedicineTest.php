<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MedicineTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('api/medicine/1');

        $response->assertStatus(200)
            ->assertJson([
                "id" => 1,
                "name" => "acetaminofen",
                "price" => "2000",
                "created_at" => "2022-12-10T08:01:51.000000Z",
                "updated_at" => "2022-12-10T08:01:52.000000Z"
            ]);
    }
}
