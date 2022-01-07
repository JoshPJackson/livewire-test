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
    public function __construct(public int $campaignId, public string $name, public int $interactions = 0, public int $uniqueInteractions = 0)
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
