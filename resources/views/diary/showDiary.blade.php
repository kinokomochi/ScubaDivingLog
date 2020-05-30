@extends('layouts.app')

@section('content')
<h2>{{ $diary['title'] }}</h2>
<p>{{ $diary['day'] }}</p>
名前→{{ $user->name }}
<p>{{ $diary['content'] }}</p>
<img src="{{ asset('storage/images/' . $diary['photo1']) }}" width="300" height="300">
<img src="{{ asset('storage/images/' . $diary['photo2']) }}" width="300" height="300">
<img src="{{ asset('storage/images/' . $diary['photo3']) }}" width="300" height="300">

<a href="{{ route('mypage') }}">マイページに戻る</a>
<a href="{{ route('createDiary') }}">日記を書く</a>
<a href="{{ route('editDiary', ['id' => $diary->id]) }}">日記を編集</a>
<a href="{{ route('editDiaryImg', ['id' => $diary->id]) }}">写真を編集</a>
<a href="{{ route('deleteDiary',['id' => $diary->id]) }}">日記を削除</a>
<a href="">ログをつける</a>

@endsection
