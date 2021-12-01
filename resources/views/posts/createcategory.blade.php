<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ゲーム攻略サイト検索</title>
    </head>
    <body>
        <h1>ゲーム攻略サイト投稿</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name">
                <h2>カテゴリ名</h2>
                <input type="text" name="category[name]" placeholder="タイトル"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>