@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-10 offset-2">
        「潜る前の注意事項」に目を通した
    </div>
</div>
<div class="row">
    <div class="col-md-10 offset-2">
        「海の中での注意事項」に目を通した
    </div>
</div>
@foreach($list as $val)
<tr>
<div class="row">
    <div class="col-md-8 offset-2">
        <td>{{ $val->list }}</td>
    </div>
    <div class="col-md-1 ">
        <form action="{{ route('deleteList') }}" method="post">
        @csrf 
        <td><button type="submit" class="btn btn-danger">削除</button></td>
        </form>
    </div>
</div>
</tr>
    @endforeach
</div>

<p><a href="{{ route('postList') }}">リスト追加</a></p>


@endsection