@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザー情報編集</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateProfile', ['id' => auth()->user()]) }}">
                    <input type="hidden" name="image" value="{{ $user->image }}">
                    <input type="hidden" name="email" value="{{ $user->email }}">
                    <input type="hidden" name="password" value="{{ $user->password }}">


                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">性別</label>

                            <div class="col-md-6">
                                <select id="gender"  class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $user->gender }}" required autocomplete="gender" autofocus>
                                    <option value="">選択して下さい</option>
                                    <option value="male">男</option>
                                    <option value="female">女</option>
                                    <option value="nonselected">無回答</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="licence" class="col-md-4 col-form-label text-md-right">ライセンス</label>

                        <div class="col-md-6">
                            <select id="Licence" type="text" class="form-control @error('licence') is-invalid @enderror" name="licence" value="{{ $user->licence }}" required autocomplete="licence" autofocus>
                                <option value="">選択して下さい</option>
                                <option value="nolicence">ライセンス無し</option>
                                <option value="OWD">オープンウォーターダイバー（OWD）</option>
                                <option value="AOW">アドバンスド・オープンウォーターダイバー（AOW)</option>
                                <option value="RED">レスキューダイバー（RED)</option>
                                <option value="DM">ダイブマスター（DM）</option>
                            </select>

                                @error('licence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">経験本数</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ $user->experience }}" required autocomplete="experience" autofocus>

                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prefecture" class="col-md-4 col-form-label text-md-right">居住地</label>

                            <div class="col-md-6">
                                <select id="prefecture" type="text" class="form-control @error('prefecture') is-invalid @enderror" name="prefecture" value="{{ $user->prefecture }}" required autocomplete="prefecture" autofocus>
                                    <option value="" selected>都道府県</option>
                                    <option value="北海道">北海道</option>
                                    <option value="青森県">青森県</option>
                                    <option value="岩手県">岩手県</option>
                                    <option value="宮城県">宮城県</option>
                                    <option value="秋田県">秋田県</option>
                                    <option value="山形県">山形県</option>
                                    <option value="福島県">福島県</option>
                                    <option value="茨城県">茨城県</option>
                                    <option value="栃木県">栃木県</option>
                                    <option value="群馬県">群馬県</option>
                                    <option value="埼玉県">埼玉県</option>
                                    <option value="千葉県">千葉県</option>
                                    <option value="東京都">東京都</option>
                                    <option value="神奈川県">神奈川県</option>
                                    <option value="新潟県">新潟県</option>
                                    <option value="富山県">富山県</option>
                                    <option value="石川県">石川県</option>
                                    <option value="福井県">福井県</option>
                                    <option value="山梨県">山梨県</option>
                                    <option value="長野県">長野県</option>
                                    <option value="岐阜県">岐阜県</option>
                                    <option value="静岡県">静岡県</option>
                                    <option value="愛知県">愛知県</option>
                                    <option value="三重県">三重県</option>
                                    <option value="滋賀県">滋賀県</option>
                                    <option value="京都府">京都府</option>
                                    <option value="大阪府">大阪府</option>
                                    <option value="兵庫県">兵庫県</option>
                                    <option value="奈良県">奈良県</option>
                                    <option value="和歌山県">和歌山県</option>
                                    <option value="鳥取県">鳥取県</option>
                                    <option value="島根県">島根県</option>
                                    <option value="岡山県">岡山県</option>
                                    <option value="広島県">広島県</option>
                                    <option value="山口県">山口県</option>
                                    <option value="徳島県">徳島県</option>
                                    <option value="香川県">香川県</option>
                                    <option value="愛媛県">愛媛県</option>
                                    <option value="高知県">高知県</option>
                                    <option value="福岡県">福岡県</option>
                                    <option value="佐賀県">佐賀県</option>
                                    <option value="長崎県">長崎県</option>
                                    <option value="熊本県">熊本県</option>
                                    <option value="大分県">大分県</option>
                                    <option value="宮崎県">宮崎県</option>
                                    <option value="鹿児島県">鹿児島県</option>
                                    <option value="沖縄県">沖縄県</option>
                                </select>
                                @error('prefecture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="introduction" class="col-md-4 col-form-label text-md-right">自己紹介文</label>

                            <div class="col-md-6">
                                <textarea id="introduction" type="text" class="form-control @error('introduction') is-invalid @enderror" name="introduction"  required autocomplete="introduction" autofocus row="4">{{ $user->introduction }}</textarea>

                                @error('introduction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    更新する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
