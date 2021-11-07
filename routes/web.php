<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('post/create', \App\Http\Livewire\PostCreate::class);

Route::get('post/{slug}', \App\Http\Livewire\Post::class);
