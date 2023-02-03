<?php

namespace Modules\Utility\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Utility\Traits\HasTag;

class Price extends Model
{
    use HasFactory, HasTag;

    protected $fillable = [
        'price',
        'active',
    ];

    protected static function newFactory()
    {
        return \Modules\Utility\Database\factories\PriceFactory::new();
    }
}
