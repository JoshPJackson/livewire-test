<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CampaignLink extends Pivot
{
    protected $table = 'campaign_links';

    public $fillable = [
        'link_id',
        'campaign_id'
    ];

    public $timestamps = false;

    public function link()
    {
        return $this->belongsTo(Link::class);
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
