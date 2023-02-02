<?php

namespace Modules\Utility\Filament\Resources\CommentResource\Pages;

use Modules\Utility\Filament\Resources\CommentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditComment extends EditRecord
{
    protected static string $resource = CommentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
