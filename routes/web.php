<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; 

Route::get('/whoami', function () {
    return 'Mikko Bobier | 2023-70297 | Block 4A | ITRACKB4 Laravel 12';
});

Route::get('/books', [BookController::class, 'index']);
