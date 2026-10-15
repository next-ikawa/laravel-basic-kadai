<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 💡 Eloquent ORM（Postモデル）を使うためにインポートを追加します
use App\Models\Post; 

class PostController extends Controller
{
    public function index() {
        // ※ index側もEloquentにする場合は Post::all() などに書き換え可能です
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    // 💡 新しく追加した show アクション（Eloquent ORM版）
    public function show($id) {
        // Eloquentの findOrFail を使うことで、主キー（id）で検索し、
        // データが見つからない場合は自動的に404エラーを返してくれます
        $post = Post::findOrFail($id);

        // 変数$postをposts/show.blade.phpファイルに渡す
        return view('posts.show', compact('post'));
    }
}
