@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="content col-12">
            <h2>{{ $user['name']}}さんのマイページ</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="content col-md-6 col-lg-4"> 
            <p><img src="{{ asset('storage/images/' . $user->image) }}" width="300" height="300"></p>
        </div>
        <div class="content col-md-6 col-lg-4">
            <h3>プロフィール</h3>
            <p>性別→{{ $user->gender }}</p>
            <p> 居住地→{{ $user->prefecture }}</p>
            <p>ライセンス→{{ $user->licence}}</p>
            <p>経験本数→{{ $user->experience}}</p>
            <p>自己紹介→{{ $user->introduction}}</p>
        </div>
        <div class="content col-md-4">
            <h3>日記一覧</h3>
            <p>
                @foreach($diary as $val)
                <a href="{{ route('showDiary', ['id' => $val['id']]) }}"><p>{{ $val['day'] . '-' . $val['title'] }}</p></a>
                @endforeach
            </p>

                {{ $diary->links() }}
        </div>
    </div>
@endsection
</body>
</html>