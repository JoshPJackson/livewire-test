<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Facades\DB;

class Link extends Model
{
    use HasFactory;

    public $fillable = [
        'path',
        'destination',
        'owner_user_id',
        'campaign_id'
    ];

    protected $touches = ['campaignLink'];

    public function currentOwner(): BelongsTo|User
    {
        return $this->belongsTo(User::class, 'owner_user_id');
    }

    public function scopeOwnedBy(Builder $builder, int $userId): Builder
    {
        $builder->where('owner_user_id', $userId);
    }

    public function campaignLink(): BelongsTo
    {
        return $this->belongsTo(CampaignLink::class);
    }

    public function interactions(): HasManyThrough
    {
        return $this->hasManyThrough(Interaction::class, CampaignLink::class, 'link_id', 'campaign_link_id');
    }

    public function scopeWithTotalInteractionsCount(Builder $query, int $campaignId = null): Builder
    {
        $query->withCount('interactions');

        if ($campaignId) {
            $query->where('campaign_id', $campaignId);
        }
        return $query;
    }

    public function scopeWithTotalUniqueInteractionsCount(Builder $query, int $campaignId = null): Builder
    {
        $query->withCount(['interactions as unique_interactions' => function ($innerQuery) {
            $innerQuery->select(DB::raw('count(distinct(ip))'));
        }]);

        if ($campaignId) {
            $query->where('campaign_id', $campaignId);
        }

        return $query;
    }
}
