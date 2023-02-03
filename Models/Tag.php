<?php

namespace Modules\Utility\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "model",
        "active",
    ];

    protected static function newFactory()
    {
        return \Modules\Utility\Database\factories\TagFactory::new();
    }
}