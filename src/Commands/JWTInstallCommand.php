<?php

namespace Konstantinkotov\jwt\Commands;

use Illuminate\Console\Command;
use Konstantinkotov\jwt\Providers\JWTServiceProvider;
use Symfony\Component\Console\Command\Command as CommandAlias;

class JWTInstallCommand extends Command
{
    protected $signature = 'jwt:install';
    protected $description = 'JWT package installation';

    public function handle() : int
    {
        $this->call('vendor:publish', [
            "--provider" => JWTServiceProvider::class,
            "--force" => true
        ]);

        return CommandAlias::SUCCESS;
    }
}