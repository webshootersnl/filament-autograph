<?php

namespace Saade\FilamentAutograph\Forms\Components\Actions;

use Filament\Actions\Action;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class ClearAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'clear';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->iconButton()->icon('heroicon-o-arrow-path-rounded-square')->color('gray');

        $this->label(fn(): string => __('filament-autograph::filament-autograph.actions.clear.label'));

        $this->livewireClickHandlerEnabled(false);

        $this->visible(
            fn(SignaturePad $component): bool => $component->isClearable()
        );
    }
}
