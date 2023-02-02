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
        $phone = $this->morphOne(Phone::class,"owner")->ofMany("default",true);
        return $phone->phone_number??'';
    }

    public function getAppends(): array
    {
        $appends = parent::appends();
        $appends[] ="phone";
        return $appends;
    }

    public function getFillable(): array
    {
        $fillable= parent::fillable();
        $fillable[] = "phone";
    }
}
