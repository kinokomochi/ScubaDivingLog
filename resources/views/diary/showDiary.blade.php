@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 offset-2">
            <h2>{{ $diary['title'] }}</h2>
        <p>潜った日：{{ $diary['day'] }} / {{ $user->name }}</p>
        <p>{{ $diary['content'] }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 offset-1">
            <p><img src="{{ asset('storage/images/' . $diary['photo1']) }}" width="300" height="300"></p>
        </div>
        <div class="col-lg-3 col-md-4 offset-1">
            <p><img src="{{ asset('storage/images/' . $diary['photo2']) }}" width="300" height="300"></p>
        </div>
        <div class="col-lg-3 offset-1">
            <p><img src="{{ asset('storage/images/' . $diary['photo3']) }}" width="300" height="300"></p>
        </div>
    </div>

</div>
@endsection
