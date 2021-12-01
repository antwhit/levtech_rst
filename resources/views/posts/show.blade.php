<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ゲーム攻略サイト検索</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>ゲーム攻略サイト リンク一覧</h1>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>リンク</h3>
                <p>
                    <a href='{{ $post->link }}'>攻略サイトへ</a>
                </p>    
            </div>
        </div>
        <div class="picture">
            <img src="{{ asset('/images/thira.jpg') }}">
            
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>