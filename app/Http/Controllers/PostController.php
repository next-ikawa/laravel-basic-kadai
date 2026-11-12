<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 投稿一覧ページ（もし以前の課題で使っていた場合は残しておきます）
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // 投稿データの作成ページを表示
    public function create()
    {
        return view('posts.create');
    }

    // バリデーションとデータの保存処理
    public function store(Request $request)
    {
        // バリデーションの設定
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);

        // フォームの入力値をもとに、postsテーブルにデータを追加
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        // 投稿一覧ページにリダイレクト
        return redirect('/posts');
    }
}
