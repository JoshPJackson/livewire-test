<?php

namespace App\Http\Livewire\Pages;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';

    public string $password = '';

    protected $rules = [
        'email' => 'string|email|exists:users',
        'password' => 'string'
    ];

    public function login()
    {
        $credentials = $this->validate();

        if (Auth::attempt($credentials)) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }

    public function render()
    {
        return view('livewire.pages.login')
            ->layout('layouts.public');
    }
}
