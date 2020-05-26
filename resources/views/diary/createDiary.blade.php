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
<form action="{{ route('createDiaryImg') }}" method="post">
@csrf 
    <div class="form-group">
        <label>ダイビング日付</label>
        <input type="date" name="day" class="form-control" value="{{ old('day') }}">
    </div>
    <div class="form-group">
        <label>タイトル</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label>記事</label>
        <textarea type="text" name="content" class="form-control" row="8">{{ old('content') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">写真・動画登録へ進む</button>
</form>
<br>

<a href="{{ route('mypage') }}">マイページへ</a>
<a href="{{ route('editProfile') }}">マイページを編集</a>
<a href="">ログをつける</a>

@endsection
