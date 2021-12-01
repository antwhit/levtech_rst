<?php
if(!empty($_FILES)){
    move_uploaded_file($_FILES['image']['tmp_name'], './image/'.$_FILES['image']['name']);
}
?>

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
            <div class="title">
                <h2>ゲーム名</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="link">
                <h2>リンク</h2>
                <textarea name="post[link]" placeholder="攻略サイトへのリンク"></textarea>
            </div>
            <div class="element_wrap">
		        <h2>画像ファイルの添付</h2>
		        <input type="file" name="image">
	        </div>
	        <div class="category">
		        <h2>カテゴリ</h2>
		        <select>
		            @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
		        </select>
	        </div>
            <input type="submit" name="btn_confirm" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>