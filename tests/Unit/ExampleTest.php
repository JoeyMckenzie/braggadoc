<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_application_runs_in_testing_environment(): void
    {
        $this->assertSame('testing', config('app.env'));
    }
}
