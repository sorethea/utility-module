<?php

namespace Modules\Utility\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'active',
    ];

    protected static function newFactory()
    {
        return \Modules\Utility\Database\factories\PriceFactory::new();
    }

    public function list(): BelongsTo{
        return $this->belongsTo(PriceList::class);
    }
}
