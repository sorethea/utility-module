<?php

namespace Modules\Utility\Filament\Resources\CommentResource\Pages;

use Modules\Utility\Filament\Resources\CommentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateComment extends CreateRecord
{
    protected static string $resource = CommentResource::class;
}
