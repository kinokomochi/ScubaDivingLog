@extends('layouts.app')

@section('content')

@foreach($diary as $val)
    <a href="{{ route('showDiary', ['id' => $val->id]) }}"><p><img src="{{ asset('storage/images/' . $val->image) }}" width="50" height="50">{{ $val->name . 'さんの日記　'. $val->day . '-' . $val->title }}</p></a>
@endforeach

{{ $diary->links() }}

@endsection
