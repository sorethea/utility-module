<?php

namespace Modules\Utility\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        "phone_number",
        "remark",
        "is_default",
    ];

    public function owner(): MorphTo{
        return $this->morphTo();
    }

    protected static function newFactory()
    {
        return \Modules\Utility\Database\factories\PhoneFactory::new();
    }


}
