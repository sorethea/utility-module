<?php

namespace Modules\Utility\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Phone extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::created(function ($model){
            if($model->is_default){
                foreach ($model->owner->phones as $phone){
                    if($model->phone_number!=$phone->phone_number){
                        $phone->is_default = false;
                        $phone->save();
                    }
                }
            }
        });

        static::updated(function ($model){
            if($model->is_default){
                foreach ($model->owner->phones as $phone){
                    if($model->phone_number!=$phone->phone_number){
                        $phone->is_default = false;
                        $phone->save();
                    }
                }
            }
        });
    }

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
