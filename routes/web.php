<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/news', function () {
    return view('news.index');
})->name('news.index');

Route::get('/discussions', function () {
    return view('discussions.index');
})->name('discussions.index');



