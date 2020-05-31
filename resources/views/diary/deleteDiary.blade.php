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

@endsection
