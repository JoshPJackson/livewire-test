<?php

namespace App\Http\Livewire\Pages\Links;

use App\Models\UserLink;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public Collection $links;

    public function mount()
    {
        $this->links = UserLink::get();
    }

    public function render()
    {
        return view('livewire.pages.links.index');
    }
}
