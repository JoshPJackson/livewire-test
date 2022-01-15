<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Interaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_link_id',
        'ip',
        'user_agent'
    ];

    public function campaign(): HasOneThrough|Link
    {
        return $this->hasOneThrough(Campaign::class, CampaignLink::class, 'id', 'id', 'campaign_link_id', 'campaign_id');
    }

    public function link(): HasOneThrough|Link
    {
        return $this->hasOneThrough(Link::class, CampaignLink::class, 'id', 'id', 'campaign_link_id', 'link_id');
    }
}
