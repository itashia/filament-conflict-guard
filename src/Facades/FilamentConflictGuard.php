<?php

declare(strict_types=1);

namespace FilamentConflictGuard\FilamentConflictGuard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FilamentConflictGuard\FilamentConflictGuard\FilamentConflictGuard
 */
class FilamentConflictGuard extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \FilamentConflictGuard\FilamentConflictGuard\FilamentConflictGuard::class;
    }
}
