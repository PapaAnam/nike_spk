<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
                font-size: 12px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="{{ asset('images/logo.jpeg') }}" class="img-thumbnail rounded mx-auto d-block" style="max-width: 150px; margin-top: 20px;" alt="">
                <div class="title m-b-md">
                    Selamat Datang
                </div>

                <div style="max-width: 50%; margin-left: 25%; font-size: 20px;" align="center">
                    Hallo semua, disini akan diberikan informasi mengenai hal-hal teknis yang berhubungan dengan keuangan di KPP PMA Satu.
Untuk tahap pertama ini akan dilaunching untuk pencetakan slip gaji secara online. Jadi bagi rekkan-rekan yang membutuhkan slip gaji, baik bulan sekarang atau bulan-bulan sebelumnya bisa mencetaknya disini. Jika nanti diperlukan tandatangan dan stempel dari Bendahara, silakan bawa cetakan slip gajinya ke Ruang Bendahara pada Hari dan Jam Kerja
<h3>Semoga bermanfaat bagi kita semua ^^</h3>
@auth
@else
<h5>Silakan <a href="{{ route('login') }}">login</a> terlebih dahulu</h5>
@endauth
                </div>

                <div class="links">
                    @auth
                    @if(Auth::user()->role == 'admin')
                    <a href="{{ route('karyawan') }}">Karyawan</a>
                    <a href="{{ route('gaji') }}">Gaji</a>
                    <a href="{{ route('gaji-baru') }}">Gaji Baru</a>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
