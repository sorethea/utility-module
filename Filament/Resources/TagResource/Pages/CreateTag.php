<?php

namespace Modules\Utility\Filament\Resources\TagResource\Pages;

use Modules\Utility\Filament\Resources\TagResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTag extends CreateRecord
{
    protected static string $resource = TagResource::class;
}
