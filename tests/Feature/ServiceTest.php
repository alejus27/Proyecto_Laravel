<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('api/service/1');

        $response->assertStatus(200)
            ->assertJson([
                "id" => 1,
                "name" => "Esterilización",
                "description" => " es un procedimiento quirúrgico (operación) seguro y efectivo que te protege contra embarazos de manera permanente.",
                "created_at" => "2022-12-10T08:15:53.000000Z",
                "updated_at" => "2022-12-10T08:15:53.000000Z"
            ]);
    }
}
