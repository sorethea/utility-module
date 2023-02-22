<?php

namespace Modules\Utility\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\LAM\Models\Tag;

trait HasTag
{
    public function tags(): BelongsToMany{
        return $this->belongsToMany(Tag::class,'tags');
    }
}
