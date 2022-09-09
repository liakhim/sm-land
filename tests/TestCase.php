<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Facade;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void {
        $this->refreshApplication();
    }
}
