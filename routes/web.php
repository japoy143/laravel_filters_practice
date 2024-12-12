<?php

use App\Livewire\Checkboxfilter;
use App\Livewire\Search;
use Illuminate\Support\Facades\Route;

Route::get('/', Search::class);
Route::get('/checkbox', Checkboxfilter::class);
