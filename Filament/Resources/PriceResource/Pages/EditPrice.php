<?php

namespace Modules\Utility\Filament\Resources\PriceResource\Pages;

use Modules\Utility\Filament\Resources\PriceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrice extends EditRecord
{
    protected static string $resource = PriceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
