@extends('layouts.app')

@section('content')
<form action="{{ route('postList') }}" method="post">
@csrf 
    <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">リスト追加</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="list" value="{{ old('$list[\'list\']') }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-8">
            <button type="submit" class="btn btn-primary text-md-right" >作成する</button>
        </div>
    </div>
</form>

@endsection