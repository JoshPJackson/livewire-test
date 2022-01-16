<?php

namespace App\Services;

use App\Models\Interaction;
use Illuminate\Database\Eloquent\Builder;

class InteractionStatsService
{
    protected int $linkId;

    protected int $campaignId;

    protected Builder $query;

    protected bool $unique = false;

    public function __construct()
    {
        $this->query = $this->baseQuery();
    }

    protected function baseQuery(): Builder
    {
        return Interaction::query()
            ->join('campaign_links', 'interactions.campaign_link_id', '=', 'campaign_links.id');
    }

    public function forLink(int $linkId): self
    {
        $this->linkId = $linkId;

        return $this;
    }

    public function duringCampaign(int $campaignId): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    public function unique(bool $unique = true): self
    {
        $this->unique = $unique;

        return $this;
    }

    public function get(): int
    {
        if ($this->linkId) {
            $this->query->where('link_id', $this->linkId);
        }

        if ($this->campaignId) {
            $this->query->where('campaign_id' , $this->campaignId);
        }

        return $this->query->count();
    }
}
