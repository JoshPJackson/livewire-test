<?php

namespace App\Http\Livewire\Pages\Campaigns;

use App\Models\Campaign;
use App\Rules\CampaignNameUniqueForUser;
use Livewire\Component;

class Create extends Component
{
    public string $name = '';

    protected $rules = [
        'name' => ['required', 'string']
    ];

    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->rules['name'][] = new CampaignNameUniqueForUser();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $data = $this->validate();

        $campaign = Campaign::create([
            'name' => $data['name'],
            'user_id' => auth()->user()->id
        ]);

        if ($campaign->exists) {
            redirect(route('campaigns.edit', ['campaign' => $campaign]));
        }
    }

    public function render()
    {
        return view('livewire.pages.campaigns.create');
    }
}
