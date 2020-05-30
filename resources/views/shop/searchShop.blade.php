@extends('layouts.app')

@section('content')

<h3>検索結果</h3>
@foreach($shops as $shop)
<a href="{{ route('showShop', ['id' => $shop->id]) }}"><p>{{ $shop['shopname'] }}</p></a>
@endforeach

@endsection