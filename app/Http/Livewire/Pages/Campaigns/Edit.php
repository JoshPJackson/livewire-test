<?php

namespace App\Http\Livewire\Pages\Campaigns;

use App\Models\Campaign;
use Livewire\Component;

class Edit extends Component
{
    public Campaign $campaign;

    public function render()
    {
        return view('livewire.pages.campaigns.edit');
    }
}
