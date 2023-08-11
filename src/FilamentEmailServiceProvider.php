<?php

namespace Loomiq\FilamentEmail;

use Illuminate\Routing\Router;
use Loomiq\FilamentEmail\Http\Middleware\PostmarkMiddleware;
use Loomiq\FilamentEmail\Providers\EmailMessageServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentEmailServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-email')
            ->hasConfigFile('filament-email')
            ->hasTranslations()
            ->hasMigration('create_filament_email_table')
            ->hasViews();
    }

    public function packageRegistered()
    {
        $this->app->register(EmailMessageServiceProvider::class);
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('PostmarkMiddleware', PostmarkMiddleware::class);
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
