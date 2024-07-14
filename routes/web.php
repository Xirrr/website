<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::resource('products', ProductController::class);
Route::resource('news', NewsController::class);
Route::resource('discussions', DiscussionController::class);

