<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Nire Spa | Cuidado y Tratamiento del cabello y la piel.</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    @stack('css')
    <style>
        .tap-top {
            width: 50px;
            height: 50px;
            position: fixed;
            bottom: 90px !important;
            right: 30px;
            z-index: 99;
            color: white;
            text-align: center;
            background: -webkit-gradient(linear, left bottom, left top, from(#fb2c2c), to(#e3342f));
            background: linear-gradient(to top, #fb2c2c, #e3342f);
            border-radius: 100%;
            font-size: 22px;
            cursor: pointer;
            line-height: 2.2;
            display: none;
            border: 1px solid white
        }

        .tap-top {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 5;
            display: none;
            color: #fff;
            text-align: center;
            background: #e3342f;
            border: none;
            font-size: 22px;
            padding: 7px;
            cursor: pointer
        }

        .tap-top .fa-angle-double-up {
            line-height: 1.4;
            text-align: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            vertical-align: middle;
            font-size: 26px
        }

        .tap-top:hover {
            background-color: #8d0a0a;
            -webkit-transition: .5s ease-in-out;
            transition: .5s ease-in-out
        }

    </style>
</head>

<body>
    <div>
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        <div class="tap-top btn btn-primary"><i class="fa fa-rocket fa-lg" style="transform: rotate(315deg);"></i></div>
        @include('partials.footer')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    @livewireScripts
    <script>
        $("#menu a").on("click", function (e) {
            e.preventDefault();
            const href = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(href).offset().top
            }, 800);
        });
    </script>
    <script>
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 600) {
                $('.tap-top').fadeIn();
            } else {
                $('.tap-top').fadeOut();
            }
        });
        $('.tap-top').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    </script>
    @stack('js')
</body>

</html>
