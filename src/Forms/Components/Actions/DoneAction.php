<?php

namespace Saade\FilamentAutograph\Forms\Components\Actions;

use Filament\Actions\Action;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class DoneAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'done';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->link()->icon('heroicon-o-check')->color('primary');

        $this->label(fn (): string => __('filament-autograph::filament-autograph.actions.done.label'));

        $this->livewireClickHandlerEnabled(false);


        $this->visible(
            fn (SignaturePad $component): bool => $component->isConfirmable()
        );
    }
}
