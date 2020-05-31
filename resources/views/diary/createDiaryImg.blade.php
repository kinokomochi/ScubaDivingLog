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
<p>日にち→{{ $validateData['day'] }}</p>
<p>タイトル→{{ $validateData['title'] }}</p>
<p>記事→{{ $validateData['content'] }}</p>

<form action="{{ route('storeDiary') }}" method="post" enctype="multipart/form-data">
@csrf 
<input type="hidden" name="day" value="{{ $validateData['day'] }}">
<input type="hidden" name="title" value="{{ $validateData['title'] }}">
<input type="hidden" name="content" value="{{ $validateData['content'] }}">

    <div class="form-group">
        <label>フォト1</label>
        <input type="file" name="photo1" class="form-control">
    </div>
    <div class="form-group">
        <label>フォト2</label>
        <input type="file" name="photo2" class="form-control">
    </div>
    <div class="form-group">
        <label>フォト3</label>
        <input type="file" name="photo3" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">登録する</button>
</form>
<br>

@endsection
