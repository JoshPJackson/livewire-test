<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Tab extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $title, public string $slug = '')
    {
        if (empty($this->slug)) {
            $this->slug = Str::slug($this->title);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tab');
    }
}
