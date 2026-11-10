<?php

declare(strict_types=1);

namespace FilamentConflictGuard\FilamentConflictGuard\Tests;

use FilamentConflictGuard\FilamentConflictGuard\FilamentConflictGuardServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            FilamentConflictGuardServiceProvider::class,
        ];
    }
}
