<?php

namespace Modules\Utility\Filament\Resources\CommentResource\Pages;

use Modules\Utility\Filament\Resources\CommentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComments extends ListRecords
{
    protected static string $resource = CommentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
