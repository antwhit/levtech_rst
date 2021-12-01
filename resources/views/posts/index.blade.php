<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ゲーム攻略サイト検索</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ゲーム攻略サイト検索</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
        <p class='createcategory'>[<a href='/posts/createcategory'>create category</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <p>{{ $post->category->name }}</p>
                    <p><a href='{{ $post->link }}'>攻略サイトへ</a></p>
                    <div class="picture">
                        <img src="{{ asset('/images/thira.jpg') }}">
                    </div>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>