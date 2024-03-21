<?php

namespace Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Providers\JWTServiceProvider;

class JWTInstallCommand extends Command
{
    protected $signature = 'jwt:install';
    protected $description = 'JWT package installation';

    public function handle()
    {
        $this->call('vendor:publish', [
            "--provider" => JWTServiceProvider::class,
            "--force" => true
        ]);

        return Command::SUCCESS;
    }
}