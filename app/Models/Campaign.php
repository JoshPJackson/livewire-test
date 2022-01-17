<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Facades\DB;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function links(): BelongsToMany
    {
        return $this->belongsToMany(Link::class, 'campaign_links');
    }

    public function campaignLinks(): HasMany
    {
        return $this->hasMany(CampaignLink::class);
    }

    public function interactions(): HasManyThrough
    {
        return $this->hasManyThrough(Interaction::class, CampaignLink::class, 'link_id', 'campaign_link_id');
    }

    public function scopeWithTotalInteractionsCount(Builder $query): Builder
    {
        return $query->withCount('interactions as total_interactions_count');
    }

    public function scopeWithTotalUniqueInteractionsCount(Builder $query): Builder
    {
        return $query->withCount(['interactions as unique_interactions_count' => function ($innerQuery) {
            $innerQuery->select(DB::raw('count(distinct(ip))'));
        }]);
    }
}
