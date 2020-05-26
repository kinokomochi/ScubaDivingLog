@extends('layouts.app')

@section('content')
<h2>{{ $diary['title'] }}</h2>
<p>{{ $diary['day'] }}</p>
名前→{{ $user->name }}
<p>{{ $diary['content'] }}</p>
<img src="{{ asset('storage/images/' . $diary['photo1']) }}" width="300" height="300">
<img src="{{ asset('storage/images/' . $diary['photo2']) }}" width="300" height="300">
<img src="{{ asset('storage/images/' . $diary['photo3']) }}" width="300" height="300">

<a href="{{ route('editImage') }}">プロフィール画像を編集</a>
<a href="{{ route('editProfile') }}">マイページを編集</a>
<a href="{{ route('createDiary') }}">日記を書く</a>
<a href="">ログをつける</a>

@endsection
