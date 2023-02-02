<?php

namespace Modules\Utility\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        "phone_number",
        "remark",
        "is_default",
    ];

    protected static function newFactory()
    {
        return \Modules\Utility\Database\factories\PhoneFactory::new();
    }


}
