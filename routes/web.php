<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 投稿一覧ページのルーティング（追加または確認）
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');


// 1. 新しく追加する2つのルーティング（必ず {id} より上に書く！）
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

// 2. 可変パラメータ {id} を使うルーティングは下に書く
Route::get('/posts/{id}', [PostController::class, 'show']);
