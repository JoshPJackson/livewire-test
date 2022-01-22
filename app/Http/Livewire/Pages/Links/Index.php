<?php

namespace App\Http\Livewire\Pages\Links;

use App\Enums\LinkStatus;
use App\Models\UserLink;
use App\Services\InteractionStatsService;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $links;

    public string $stateFilterValue = '';

    public array $stateOptions = [];

    private InteractionStatsService $interactionStatsService;

    public function stats(): InteractionStatsService
    {
        return $this->interactionStatsService;
    }

    public function mount(InteractionStatsService $interactionStatsService)
    {
        $this->setStateOptions();
        $this->setLinks();
        $this->interactionStatsService = $interactionStatsService;
    }

    public function filterByState()
    {
        if ($this->stateFilterValue) {
            $this->links = UserLink::withTotalInteractionsCount()->withTotalUniqueInteractionsCount()->withStatus(LinkStatus::from($this->stateFilterValue))->get();
        } else {
            $this->setLinks();
        }
    }

    private function setLinks()
    {
        $this->links = UserLink::withTotalInteractionsCount()->withTotalUniqueInteractionsCount()->get();
    }

    private function setStateOptions()
    {
        $this->stateOptions = array_merge(["" => "State"], array_combine(LinkStatus::values(), LinkStatus::values()));
    }

    public function render()
    {
        return view('livewire.pages.links.index');
    }
}
