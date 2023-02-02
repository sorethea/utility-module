<?php

namespace Modules\Utility\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        "address",
        "name",
        "city",
        "country",
        "is_default",
        "location",
        "properties",
    ];

    protected $casts = [
        "properties"=>"array"
    ];

    public function owner(): MorphTo{
        return $this->morphTo();
    }

    protected static function newFactory()
    {
        return \Modules\Utility\Database\factories\AddressFactory::new();
    }

}
