<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
