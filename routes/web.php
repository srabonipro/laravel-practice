<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/category', function () {
    $categories = Category::all();
    return view('category', compact('categories'));
})->name('category');
