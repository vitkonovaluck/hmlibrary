<?php

namespace App\Models;

use App\Concern\Likeable;
use App\Scopes\PostedScope;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newse extends Model
{
    use HasFactory;

    protected $table = 'newses';
    protected $guarded = false;

    public function scopeLast(Builder $query, int $limit = 5): Builder
    {
        return $query->where('created_at', '<=', now())
            ->latest()
            ->limit($limit);
    }

}
