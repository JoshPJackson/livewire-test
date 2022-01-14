<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Pages\Campaigns\Create;
use App\Http\Livewire\Pages\Campaigns\Edit;
use App\Http\Livewire\Pages\Campaigns\Index;
use App\Http\Livewire\Pages\Campaigns\View;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('campaigns', Index::class)->name('campaigns.index');
Route::get('campaigns/create', Create::class)->name('campaigns.create');
Route::get('campaigns/{campaign}', View::class)->name('campaigns.view');
Route::get('campaigns/{campaign}/edit', Edit::class)->name('campaigns.edit');
Route::get('links', \App\Http\Livewire\Pages\Links\Index::class)->name('links.index');
Route::get('links/create', \App\Http\Livewire\Pages\Links\Create::class)->name('links.create');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
