<?php

namespace App\Http\Livewire\Pages\Campaigns;

use App\Models\Campaign;
use App\Models\UserCampaign;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $campaigns;

    public function setCampaigns()
    {
        $this->campaigns = UserCampaign::get();
    }

    public function mount()
    {
        $this->setCampaigns();
    }

    public function render()
    {
        return view('livewire.pages.campaigns.index');
    }
}
