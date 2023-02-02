<?php

namespace Modules\Utility\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Utility\Models\Address;

trait HasAddress
{
    public function addresses() :MorphMany{
        return $this->morphMany(Address::class,"owner");
    }

    public function getAddressAttribute() :string {
        $address = $this->addresses()->where("is_default",true)->first();
        return $address->address??'';
    }

}
