@extends('layouts.app')
@section('content')
<h2>マイページ</h2>
    名前→{{Auth::user()->name}}
        プロフィール写真→<img src="{{ asset('storage/images/' . Auth::user()->image) }}" width="300" height="300">
        性別→{{Auth::user()->gender}}
        居住地→{{Auth::user()->prefecture}}
        ライセンス→{{Auth::user()->licence}}
        経験本数→{{Auth::user()->experience}}
        自己紹介→{{Auth::user()->introduction}}
<a href="{{ route('editImage') }}">プロフィール画像を編集</a>
<a href="{{ route('editProfile') }}">マイページを編集</a>
<a href="{{ route('createDiary') }}">日記を書く</a>
<a href="">ログをつける</a>
<br>
<h3>日記一覧</h3>

@foreach($diary as $val)
<a href="{{ route('showDiary', ['id' => $val['id']]) }}"><p>{{ $val['day'] . '-' . $val['title'] }}</p></a>
@endforeach
{{ $diary->links() }}

@endsection
</body>
</html>