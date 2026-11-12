<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿作成</title>
    <style>
        /* ラベルと入力欄の配置を綺麗に揃えるCSS */
        .form-group {
            margin-bottom: 12px;
        }
        .form-group label {
            display: inline-block;
            width: 80px;       /* ラベルの横幅を固定して開始位置を揃える */
            vertical-align: top; /* 「本文」の文字をテキストエリアの上端に揃える */
        }
        .form-group input,
        .form-group textarea {
            width: 300px;      /* 入力欄の横幅も統一する */
            box-sizing: border-box;
        }
        .form-group textarea {
            height: 100px;     /* 本文の入力欄を少し広くする */
        }
    </style>
</head>

<body>
    <h1>投稿作成</h1>

    <!-- バリデーションに引っかかった際のエラーメッセージ表示エリア -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- PostControllerのstoreアクションへPOSTメソッドで送信するフォーム -->
    <form action="{{ route('posts.store') }}" method="POST">
        <!-- CSRF対策 -->
        @csrf

        <!-- 投稿のタイトルおよび本文の入力欄 -->
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="content">本文</label>
            <textarea id="content" name="content">{{ old('content') }}</textarea>
        </div>

        <button type="submit">投稿</button>
    </form>
</body>

</html>

