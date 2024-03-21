<?php

namespace Konstantinkotov\jwt\src\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use KonstantinKotov\jwt\src\Commands\JWTInstallCommand;

class JWTServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $now = Carbon::now()->format('Y_m_d_His');
        $migration_filepath = base_path('database/migrations/') . $now.'_add_api_token_to_users_table.php';

        $this->publishes([
            __DIR__.'../Migrations/add_api_token_to_users_table.php' => $migration_filepath,
        ]);

        $this->commands([
            JWTInstallCommand::class
        ]);
    }
}