<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LinkController;
use App\Http\Livewire\Pages\Campaigns\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('campaigns', Index::class)->name('campaigns.index');
Route::get('links', [LinkController::class, 'index'])->name('links.index');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
