<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿一覧</title>
    <style>
    </style>
</head>
<body>

    <h1>投稿一覧</h1>

    <table>
        <thead>
            <tr>
                <th class="col-title">タイトル</th>
                <th>本文</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
