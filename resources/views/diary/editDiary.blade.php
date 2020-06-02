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
<form action="{{ route('updateDiary', ['id' => $diary->id]) }}" method="post">
@csrf 
    <div class="form-group">
        <label>ダイビング日付</label>
        <input type="date" name="day" class="form-control" value="{{ old('day', $diary->day) }}">
    </div>
    <div class="form-group">
        <label>タイトル</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $diary->title) }}">
    </div>
    <div class="form-group">
        <label>記事</label>
        <textarea type="text" name="content" class="form-control" row="8">{{ old('content', $diary->content) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">更新する</button>
</form>
<br>
<a href="{{ route('deleteDiary', ['id' => $diary->id]) }}">日記を削除する</a>

<br>

@endsection
