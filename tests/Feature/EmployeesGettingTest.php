<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeesGettingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->postJson('/api/employees', ['name' => 'Sally', 'email' => 'ffewhhhfuwej@mail.ru', 'password' => 'dsklfhvsdoi']);

        $response
            ->assertStatus(201);
    }
}
