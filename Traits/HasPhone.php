<?php

namespace Modules\Utility\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Utility\Models\Phone;

trait HasPhone
{
    public function phones() :MorphMany{
        return $this->morphMany(Phone::class,"owner");
    }

    public function getPhoneAttribute() :string {
        $phone = $this->phones->where("is_default",true)->first();
        return $phone->phone_number??'';
    }

}
