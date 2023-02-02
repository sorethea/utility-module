<?php

namespace Modules\Utility\Filament\Resources\PhoneResource\Pages;

use Modules\Utility\Filament\Resources\PhoneResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhone extends EditRecord
{
    protected static string $resource = PhoneResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
