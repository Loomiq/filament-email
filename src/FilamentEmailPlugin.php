<?php

namespace Loomiq\FilamentEmail;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Loomiq\FilamentEmail\Filament\Resources\EmailResource;
use Loomiq\FilamentEmail\Filament\Resources\EmailResource\Widgets\ModelLogWidget;
use Loomiq\FilamentEmail\Filament\Resources\IntegrationResource;

class FilamentEmailPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-email';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            EmailResource::class,
            IntegrationResource::class,
        ]);
        $panel->widgets([
            ModelLogWidget::class,
        ]);
    }

    public function boot(Panel $panel): void
    {

    }

    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }
}
