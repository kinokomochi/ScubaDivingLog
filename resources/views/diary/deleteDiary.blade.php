@extends('layouts.app')

@section('content')
<h1>この日記を削除しますか？</h1>

<h2>{{ $diary['title'] }}</h2>
<p>{{ $diary['day'] }}</p>
名前→{{ $user->name }}
<p>{{ $diary['content'] }}</p>
<img src="{{ asset('storage/images/' . $diary['photo1']) }}" width="300" height="300">
<img src="{{ asset('storage/images/' . $diary['photo2']) }}" width="300" height="300">
<img src="{{ asset('storage/images/' . $diary['photo3']) }}" width="300" height="300">

<form action="{{ route('destroyDiary', ['id' => $diary->id]) }}" method="post">
@csrf 
<br>
<button type="submit" class="btn btn-danger">削除する</button>
</form>
<br>
<a href="{{ route('mypage') }}">マイページに戻る</a>
<a href="{{ route('createDiary') }}">日記を書く</a>
<a href="">写真を編集</a>
<a href="">日記を削除</a>
<a href="">ログをつける</a>

@endsection
