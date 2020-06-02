@extends('layouts.app')

@section('content')
<div class="content row">
    <div class="col-2"></div>
    <div class="col-8">
        <h3>ユーザー一覧</h3>
    </div>
</div>
<div class="content row">
@foreach($user as $val)
    <div class="col-sm-4 col-6">
        <a href="{{ route('mypage', ['id' => $val->id]) }}"><p><img src="{{ asset('storage/images/' . $val->image) }}" width="200" height="200"></p>
        <p>{{ $val->name }}</p></a>
    </div>
@endforeach
</div>

<div class="content row">
    <div class="col-2"></div>
    <div class="col-8">
        {{ $user->links() }}
    </div>
    <div class="col-2"></div>
</div>

@endsection