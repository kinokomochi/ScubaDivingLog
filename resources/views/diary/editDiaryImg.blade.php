@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<p>日にち→{{ $diary['day'] }}</p>
<p>タイトル→{{ $diary['title'] }}</p>
<p>記事→{{ $diary['content'] }}</p>

<form action="{{ route('updateDiaryImg', ['id' => $diary->id]) }}" method="post" enctype="multipart/form-data">
@csrf 
<input type="hidden" name="id" value="{{ $diary['id'] }}">
<input type="hidden" name="day" value="{{ $diary['day'] }}">
<input type="hidden" name="title" value="{{ $diary['title'] }}">
<input type="hidden" name="content" value="{{ $diary['content'] }}">

    <div class="form-group">
        <label>フォト1</label>
        <img src="{{ asset('storage/images/' . $diary['photo1']) }}" width="300" height="300">
        <input type="file" name="photo1" class="form-control" value="{{ $diary->photo1 }}">
    </div>

    <div class="form-group">
        <label>フォト2</label>
        <img src="{{ asset('storage/images/' . $diary['photo2']) }}" width="300" height="300">
        <input type="file" name="photo2" class="form-control" value="{{ $diary->photo2 }}">
    </div>

    <div class="form-group">
        <label>フォト3</label>
        <img src="{{ asset('storage/images/' . $diary['photo3']) }}" width="300" height="300">
        <input type="file" name="photo3" class="form-control" value="{{ $diary->photo3 }}">
    </div>
    <button type="submit" class="btn btn-primary">更新する</button>
</form>
<br>

<a href="{{ route('mypage') }}">マイページへ</a>
<a href="{{ route('editProfile') }}">マイページを編集</a>
<a href="">ログをつける</a>

@endsection
