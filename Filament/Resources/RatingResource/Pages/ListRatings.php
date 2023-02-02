<?php

namespace Modules\Utility\Filament\Resources\RatingResource\Pages;

use Modules\Utility\Filament\Resources\RatingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRatings extends ListRecords
{
    protected static string $resource = RatingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
