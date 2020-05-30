<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    @extends('layouts.app')
    @section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    ScubaDivingLog
            </div>
            <div class="m-b-md">
            <p>ダイビングSNS”ScubaDivingLog”へようこそ！</p>
            <p>このSNSはスキューバダイビングを楽しむ全ての人たちに使ってほしいソーシャルサイトです。ダイビングの記録と思い出を共有し、ダイビングライフをより充実させましょう！</p>
            <p>まだダイビングをした事がない人はまずはこの動画で海の中の世界を覗いて見てください。きっと海の世界に興味が湧くはずです！</p>
            <p><a href="{{ route('stream') }}">海の中を覗いてみる</a></p>

                @if (Route::has('login'))

                    @auth
                    
                        <p><a href="{{ url('/home') }}">トップページ</a></p>
                    @else
                        @if (Route::has('register'))
                            <p><a href="{{ route('register') }}">サインアップ</a></p>
                        @endif
                        <p><a href="{{ route('login') }}">ログイン</a></p>

                    @endauth
                @endif
            </div>

                <div class="links">
                </div>
            </div>
        </div>
    @endsection
    </body>
</html>
