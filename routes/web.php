<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', [PostController::class, 'index'])->name('posts.index');
Route::post('/top', [PostController::class, 'store'])->name('posts.store');

