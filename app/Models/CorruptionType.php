<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CorruptionType extends Model
{
    // model binding
    public function report(): HasMany
    {
        return $this->hasMany(Report::class);
    }
}
