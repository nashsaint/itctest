<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent:: tearDown();
    }

    public function user()
    {
        return User::factory()->create();
    }
}
