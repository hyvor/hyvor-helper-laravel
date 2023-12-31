<?php declare(strict_types=1);

namespace Hyvor\Helper\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/auth.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'hyvor-helper');
    }
}
