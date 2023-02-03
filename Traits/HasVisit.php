<?php

namespace Modules\Utility\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Utility\Models\Visit;

trait HasVisit
{
    public function visitors(): MorphMany
    {
        return $this->morphMany(Visit::class,"visit");
    }
}
