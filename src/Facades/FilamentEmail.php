<?php

namespace Loomiq\FilamentEmail\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Loomiq\FilamentEmail\FilamentEmailPlugin
 */
class FilamentEmail extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Loomiq\FilamentEmail\FilamentEmailPlugin::class;
    }
}
