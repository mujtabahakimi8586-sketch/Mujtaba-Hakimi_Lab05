<?php

use Illuminate\Support\Facades\Route;

// Task 4 - Create a simple route
Route::get('/', function () {
    return view('home', [
        'course' => 'Web Information Systems'
    ]);
});
