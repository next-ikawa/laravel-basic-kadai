<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// 完全に半角小文字で設定
Route::get('/posts', [PostController::class, 'index']);
