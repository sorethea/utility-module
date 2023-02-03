<?php

namespace Modules\Utility\Filament\Resources\PriceResource\Pages;

use Modules\Utility\Filament\Resources\PriceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrices extends ListRecords
{
    protected static string $resource = PriceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
