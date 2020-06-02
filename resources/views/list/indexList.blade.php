@extends('layouts.app')
@section('content')

<div class="content row">
    <div class="col-2"></div>
    <div class="col-8">
        <p><svg class="bi bi-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
</svg>「潜る前の注意事項」に目を通した</p>
    </div>
</div>
<div class="content row">
    <div class="col-2"></div>
    <div class="col-8">
        <p><svg class="bi bi-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
</svg>「海の中での注意事項」に目を通した</p>
    </div>
</div>
@foreach($list as $val)
<tr>
<div class="content row">
    <div class="col-2"></div>
    <div class="col-8">
        <td><p><svg class="bi bi-check" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
</svg>{{ $val->list }}</p></td>
    </div>
        <form action="{{ route('deleteList', ['id' => $val->id]) }}" method="post">
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