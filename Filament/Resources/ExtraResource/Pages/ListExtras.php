<?php

namespace Modules\Utility\Filament\Resources\ExtraResource\Pages;

use Modules\Utility\Filament\Resources\ExtraResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExtras extends ListRecords
{
    protected static string $resource = ExtraResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
