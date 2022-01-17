<?php

namespace App\View\Components\Campaigns\Index;

use Illuminate\View\Component;

class GalleryCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public int $campaignId, public string $name, public int $totalInteractionsCount, public int $uniqueInteractionsCount)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.campaigns.index.gallery-card');
    }
}
