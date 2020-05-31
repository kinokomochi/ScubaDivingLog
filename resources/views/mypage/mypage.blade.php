@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="content col-12">
            <h2>{{Auth::user()->name}}さんのマイページ</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="content col-md-6 col-lg-4"> 
            <p><img src="{{ asset('storage/images/' . Auth::user()->image) }}" width="300" height="300"></p>
            <p><a href="{{ route('editImage') }}">プロフィール画像を編集</a></p>
        </div>
        <div class="content col-md-6 col-lg-4">
            <h3>プロフィール</h3>
            <p>性別→{{Auth::user()->gender}}</p>
            <p> 居住地→{{Auth::user()->prefecture}}</p>
            <p>ライセンス→{{Auth::user()->licence}}</p>
            <p>経験本数→{{Auth::user()->experience}}</p>
            <p>自己紹介→{{Auth::user()->introduction}}</p>
            <a href="{{ route('editProfile') }}">マイページを編集</a>
        </div>
        <div class="content col-md-4">
            <h3>日記一覧</h3>
            <p>
                @foreach($diary as $val)
                <a href="{{ route('showDiary', ['id' => $val['id']]) }}"><p>{{ $val['day'] . '-' . $val['title'] }}</p></a>
                @endforeach
            </p>

                {{ $diary->links() }}
            <a href="{{ route('createDiary') }}">日記を書く</a>

        </div>
    </div>

@endsection
</body>
</html>