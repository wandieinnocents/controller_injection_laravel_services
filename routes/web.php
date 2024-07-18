<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
     
});

Route::resource('posts', App\Http\Controllers\PostController::class);
Route::get('/twoposts/{parameter1}/{parameter2}', 'App\Http\Controllers\PostController\@twoposts')->name('route.link');
