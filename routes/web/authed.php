<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LinkController;
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
Route::get('links', [LinkController::class, 'index'])->name('links.index');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
