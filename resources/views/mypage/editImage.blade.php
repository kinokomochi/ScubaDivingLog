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
<form action="{{ route('updateImage') }}" method="post" enctype="multipart/form-data">
@csrf 
    <div class="form-group">
        <label>プロフィール画像</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">登録する</button>
</form>
<br>


@endsection
