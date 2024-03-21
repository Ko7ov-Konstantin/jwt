<?php

namespace KonstantinKotov\jwt\src\Commands;

use Illuminate\Console\Command;
use Konstantinkotov\jwt\src\Providers\JWTServiceProvider;


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