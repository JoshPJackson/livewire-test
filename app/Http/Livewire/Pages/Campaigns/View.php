<?php

namespace App\Http\Livewire\Pages\Campaigns;

use App\Models\Campaign;
use Livewire\Component;

class View extends Component
{
    public Campaign $campaign;

    public array $tabNames = [
        'basic' => 'Basic',
        'links' => 'Links',
        'privacy' => 'Privacy',
        'log' => 'Log',
        'targets' => 'Targets',
        'alerts' => 'Alerts'
    ];

    public function render()
    {
        return view('livewire.pages.campaigns.view');
    }
}
