<?php

namespace App\Http\Livewire\Pages\Links;

use App\Models\UserLink;
use App\Services\InteractionStatsService;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $links;

    private InteractionStatsService $interactionStatsService;

    public function stats(): InteractionStatsService
    {
        return $this->interactionStatsService;
    }

    public function mount(InteractionStatsService $interactionStatsService)
    {
        $this->links = UserLink::withTotalInteractionsCount()->withTotalUniqueInteractionsCount()->get();
        $this->interactionStatsService = $interactionStatsService;
    }

    public function render()
    {
        return view('livewire.pages.links.index');
    }
}
