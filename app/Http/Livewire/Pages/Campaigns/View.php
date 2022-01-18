<?php

namespace App\Http\Livewire\Pages\Campaigns;

use App\Models\Campaign;
use Livewire\Component;

class View extends Component
{
    public $campaign;

    public array $tabNames = [
        'basic' => 'Basic',
        'links' => 'Links',
        'privacy' => 'Privacy',
        'log' => 'Log',
        'targets' => 'Targets',
        'alerts' => 'Alerts'
    ];

    public function mount($campaign)
    {
        $this->campaign = Campaign::with(['links' => function ($query) use ($campaign) {
            $query->withTotalInteractionsCount($campaign)->withTotalUniqueInteractionsCount($campaign);
        }])->find($campaign);
    }

    public function render()
    {
        return view('livewire.pages.campaigns.view');
    }
}
