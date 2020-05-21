<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<h2>マイページ</h2>
    名前→{{auth()->user()->name}}
        プロフィール写真→{{auth()->user()->image}}
        性別→{{auth()->user()->gender}}
        居住地→{{auth()->user()->prefecture}}
        ライセンス→{{auth()->user()->licence}}
        経験本数→{{auth()->user()->experience}}
        自己紹介→{{auth()->user()->introduction}}
<a href="">プロフィール画像を編集</a>
<a href="">マイページを編集</a>
<a href="">日記を書く</a>
<a href="">ログをつける</a>

@endsection
</body>
</html>