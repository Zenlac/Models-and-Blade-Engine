<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);