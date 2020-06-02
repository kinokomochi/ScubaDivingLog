@extends('layouts.app')

@section('content')
<div class="content row">
    <div class="col-2"></div>
    <div class="col-8">
<h3>検索結果</h3>
    </div>
</div>
@foreach($shops as $shop)
<div class="content row">
    <div class="col-2"></div>
    <div class="col-8">
        <a href="{{ route('showShop', ['id' => $shop->id]) }}"><p>{{ $shop['shopname'] }}</p></a>
    </div>
</div>
@endforeach

@endsection