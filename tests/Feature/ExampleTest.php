<?php

declare(strict_types=1);

use FilamentConflictGuard\FilamentConflictGuard\FilamentConflictGuard;

it('resolves the singleton', function () {
    expect(app(FilamentConflictGuard::class))->toBeInstanceOf(FilamentConflictGuard::class);
});

it('returns the same instance from the container', function () {
    expect(app(FilamentConflictGuard::class))->toBe(app(FilamentConflictGuard::class));
});

it('merges the package config', function () {
    expect(config('filament-conflict-guard.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('filament-conflict-guard::messages.placeholder'))->toBe('FilamentConflictGuard placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('filament-conflict-guard::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('filament-conflict-guard:placeholder')
        ->expectsOutputToContain('FilamentConflictGuard placeholder command executed.')
        ->assertSuccessful();
});
