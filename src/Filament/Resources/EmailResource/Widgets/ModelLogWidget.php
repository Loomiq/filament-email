<?php

namespace Loomiq\FilamentEmail\Filament\Resources\EmailResource\Widgets;

use Filament\Widgets\Widget;
use Loomiq\FilamentEmail\Models\Email;

class ModelLogWidget extends Widget
{
    public ?Email $record = null;

    protected int|string|array $columnSpan = 'full';
}
