<?php

use App\Http\Controllers\TrashController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/category', function () {
    $categories = Category::with('children.children.children')->root()->get();
    return view('category', compact('categories'));
})->name('category');


Route::get('trash/{period}', [TrashController::class, 'index'])
    ->name('trash.index')
    ->where('period', 'month|week');
