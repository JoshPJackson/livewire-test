<?php

namespace App\Http\Livewire\Pages\Links;

use App\Enums\LinkStatus;
use App\Models\Link;
use App\Models\UserLink;
use App\Services\InteractionStatsService;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $links;

    public string $stateFilterValue = '';

    public string $searchFilterValue = '';

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

    public function search()
    {
        $this->links = Link::withTotalInteractionsCount()->withTotalUniqueInteractionsCount()->get();
    }

    private function setLinks()
    {
        $this->links = Link::withTotalInteractionsCount()->withTotalUniqueInteractionsCount()->get();
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
