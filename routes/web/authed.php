<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Pages\Campaigns\Create;
use App\Http\Livewire\Pages\Campaigns\Edit;
use App\Http\Livewire\Pages\Campaigns\Index;
use App\Http\Livewire\Pages\Campaigns\View;
use Illuminate\Support\Facades\Route;

Route::get('', \App\Http\Livewire\Pages\Links\Index::class)->name('links.index');
