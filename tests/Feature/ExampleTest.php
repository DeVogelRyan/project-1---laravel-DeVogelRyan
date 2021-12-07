<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {

        $user = new User(array('name' => 'John'));
        $this->be($user);

        $response = $this->get('/');

        $response->assertStatus (200);
    }
}
