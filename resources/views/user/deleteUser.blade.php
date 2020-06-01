@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">確認</div>
                    <p>これまでの投稿内容は全て削除されます。</p>
                    <p>本当にアカウントを削除しますか？</p>
                    <form action="{{ route('destroyUser', ['id' => Auth::user()->id]) }}" method="post">
                    @csrf 
                    <button type="submit" class="btn btn-danger">アカウントを削除する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
