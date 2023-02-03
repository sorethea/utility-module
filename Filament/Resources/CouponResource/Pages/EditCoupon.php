<?php

namespace Modules\Utility\Filament\Resources\CouponResource\Pages;

use Modules\Utility\Filament\Resources\CouponResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoupon extends EditRecord
{
    protected static string $resource = CouponResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
