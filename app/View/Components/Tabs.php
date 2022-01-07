<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tabs extends Component
{
    /**
     * @param array $tabs - ['slugged name' => 'display name']
     */
    public function __construct(public array $tabs)
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
        return view('components.tabs');
    }
}
