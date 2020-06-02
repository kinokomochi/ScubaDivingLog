@extends('layouts.app')

@section('content')

<div class="content row">
    <div class="col-2"></div>
    <div class="col-8">
    @foreach($diary as $val)
        <a href="{{ route('showDiary', ['id' => $val->id]) }}"><p><img src="{{ asset('storage/images/' . $val->image) }}" width="50" height="50">{{ $val->name . 'さんの日記　'. $val->day . '-' . $val->title }}</p></a>
    @endforeach
    </div>
    <div class="col-2"></div>
</div>
<div class="content row">
    <div class="col-2"></div>
    <div class="col-8">
        {{ $diary->links() }}
    </div>
    <div class="col-2"></div>
</div>
@endsection
