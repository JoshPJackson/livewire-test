<?php

namespace App\Services;

use App\Models\Interaction;
use Illuminate\Database\Eloquent\Builder;

class InteractionStatsService
{
    protected int $linkId = 0;

    protected int $campaignId = 0;

    protected Builder $query;

    protected bool $unique = false;

    protected int $userId = 0;

    public function __construct()
    {
        $this->query = $this->baseQuery();
    }

    protected function baseQuery(): Builder
    {
        return Interaction::query()
            ->join('campaign_links', 'interactions.campaign_link_id', '=', 'campaign_links.id')
            ->join('links', 'campaign_links.link_id', '=', 'links.id');
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

        if ($this->userId) {
            $this->query->where('owner_user_id', $this->userId);
        }

        if ($this->unique) {
            $this->query->distinct('ip');
        }

        return $this->query->count();
    }

    public function forUser(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
