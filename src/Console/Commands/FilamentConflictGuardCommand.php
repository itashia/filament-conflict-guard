<?php

declare(strict_types=1);

namespace FilamentConflictGuard\FilamentConflictGuard\Console\Commands;

use Illuminate\Console\Command;

class FilamentConflictGuardCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'filament-conflict-guard:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package filament-conflict-guard.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('FilamentConflictGuard placeholder command executed.');

        return self::SUCCESS;
    }
}
