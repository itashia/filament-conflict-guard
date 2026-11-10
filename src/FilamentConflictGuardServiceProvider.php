<?php

declare(strict_types=1);

namespace FilamentConflictGuard\FilamentConflictGuard;

use FilamentConflictGuard\FilamentConflictGuard\Console\Commands\FilamentConflictGuardCommand;
use Illuminate\Support\ServiceProvider;

class FilamentConflictGuardServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/filament-conflict-guard.php', 'filament-conflict-guard');

        $this->app->singleton(FilamentConflictGuard::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/filament-conflict-guard.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-conflict-guard');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'filament-conflict-guard');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/filament-conflict-guard.php' => config_path('filament-conflict-guard.php'),
        ], ['filament-conflict-guard', 'filament-conflict-guard-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/filament-conflict-guard'),
        ], ['filament-conflict-guard', 'filament-conflict-guard-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/filament-conflict-guard'),
        ], ['filament-conflict-guard', 'filament-conflict-guard-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/filament-conflict-guard'),
        ], ['filament-conflict-guard', 'filament-conflict-guard-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['filament-conflict-guard', 'filament-conflict-guard-migrations']);

        $this->commands([
            FilamentConflictGuardCommand::class,
        ]);
    }
}
