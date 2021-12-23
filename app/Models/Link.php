<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    use HasFactory;

    public $fillable = [
        'path',
        'destination',
        'owner_user_id',
    ];

    public function currentOwner(): BelongsTo|User
    {
        return $this->belongsTo(User::class, 'owner_user_id');
    }

    public function scopeOwnedBy(Builder $builder, int $userId)
    {
        $builder->where('owner_user_id', $userId);
    }
}
