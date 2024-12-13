<?php

use App\Livewire\Checkboxfilter;
use App\Livewire\Search;
use App\Livewire\Selectfilter;
use App\Livewire\Todolist;
use Illuminate\Support\Facades\Route;

Route::get('/', Search::class);
Route::get('/checkbox', Checkboxfilter::class);

Route::get('/select', Selectfilter::class);
Route::get('/todolist', Todolist::class);
