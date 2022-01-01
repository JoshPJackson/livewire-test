<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class Login extends Component
{
    public string $email = '';

    public string $password = '';

    public string $emailPlaceholder = 'me@example.com';

    public string $errorMessage = 'something went wrong';

    public function render()
    {
        return view('livewire.forms.login');
    }
}
