<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    // route model binding
    public function type(): BelongsTo
    {
        return $this->belongsTo(CorruptionType::class);
    }

    public function scopeFilter($query, array $filters)
    {

        if ($filters['search'] ?? false) {
            $query->where('reporter', 'like', '%' . request('search') . '%');
        }
    }
}
