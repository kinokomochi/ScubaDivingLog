@extends('layouts.app')

@section('content')

@foreach($user as $val)
    <a href="{{ route('mypage', ['id' => $val->id]) }}"><p>{{ $val->name }}</p></a>
@endforeach

{{ $user->links() }}


@endsection