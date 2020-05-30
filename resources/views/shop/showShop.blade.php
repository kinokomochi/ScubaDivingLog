@extends('layouts.app')

@section('content')
<h2>{{ $shop['shopname'] }}</h2>
<p>{{ $shop['address'] }}</p>
<iframe id="map" 
src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCtQ-vIHO-nS180XF2DgqsStFH6M_c6qGY&q={{ $shop['address'] }}" 
    width="100%" height="320" frameborder="0"></iframe>
<p>{{ $shop['url'] }}</p>
<p>{{ $shop['introduction'] }}</p>

<img src="{{ asset('storage/images/' . $shop['image']) }}" width="300" height="300">

<a href="{{ route('mypage') }}">マイページに戻る</a>
<a href="{{ route('createDiary') }}">日記を書く</a>

@endsection
