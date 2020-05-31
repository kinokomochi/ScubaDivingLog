@extends('layouts.app')

@section('content')

@foreach($diary as $val)
    <a href="{{ route('showDiary', ['id' => $val->id]) }}"><p>{{ $val->day . '-' . $val->title }}</p></a>
@endforeach

{{ $diary->links() }}

@endsection
