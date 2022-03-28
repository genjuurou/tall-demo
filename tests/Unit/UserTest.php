<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_it_has_initials(): void
    {
        $user = User::factory()->make(['name' => 'Michael Scott']);

        $this->assertEquals('MS', $user->initials);
    }

    public function test_initials_consist_of_first_and_last_name(): void
    {
        $user = User::factory()->make(['name' => 'Albus Percival Wulfric Brian Dumbledore']);

        $this->assertEquals('AD', $user->initials);
    }
}
