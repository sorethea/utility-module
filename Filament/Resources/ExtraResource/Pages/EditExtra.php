<?php

namespace Modules\Utility\Filament\Resources\ExtraResource\Pages;

use Modules\Utility\Filament\Resources\ExtraResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExtra extends EditRecord
{
    protected static string $resource = ExtraResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
