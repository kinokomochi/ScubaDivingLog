@extends('layouts.app')

@section('content')
<div class="content">
    <h2>{{ $shop['shopname'] }}</h2>
    <br>
    <div class="row">
        <div class="col-md-6">
            <iframe id="map" src="https://www.google.com/maps/embed/v1/place?key={{ API_KEY }}&q={{ $shop['address'] }}"></iframe>
            <p>{{ $shop['address'] }}</p>
        </div>
        <div class="col-md-6">
            <p>{{ $shop['url'] }}</p>
            <p>{{ $shop['introduction'] }}</p>
            <img src="{{ asset('storage/images/' . $shop['image']) }}" width="50" height="50">
        </div>

    </div>
</div>
@endsection
