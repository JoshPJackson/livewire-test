<?php

use App\Http\Controllers\LinkController;
use App\Http\Livewire\Pages\Login;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');



// linking wildcard (THIS MUST BE THE LAST ROUTE)
Route::get('{link}', LinkController::class);
