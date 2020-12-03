<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <style>
        @font-face {
            font-family: 'Poppins', sans-serif;
            src: url({{ asset('css/fonts/Poppins/Poppins-Bold.ttf') }});
        }
    </style>
    @yield('css')
    <?php
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('/', $url);
    // dd($url);
    ?>
</head>
<body>
    <header class="sticky-top">
        {{-- <div class="logo">
            <img src="" alt="">
        </div> --}}
        <nav class="nav-bar">
            <ul class="d-flex justify-content-center pl-0 mt-3">
                <li><a href="/" class="@if($url[0] == "" && $url[1] == "") active @endif">Home</a></li>
                <li><a href="/portfolio" class="@if($url[1] == "portfolio") active @endif">Portfolio</a></li>
                {{-- <li><a href="#">Contact</a></li> --}}
            </ul>
        </nav>
    </header>
    @if($url[1] == "portfolio") 
        @include('includes.sidebar')
    @endif
    
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $('.sidebar>ul>li>a').click(function() {
            if($(this).parent().hasClass('active')) {
                if($(this).next().hasClass('d-none')) {
                    $(this).next().removeClass('d-none');
                } else {
                    $(this).next().addClass('d-none');
                }
            } else {
                $('.sidebar>ul>li').each(function() {
                    if($(this).hasClass('active')) {
                        $(this).removeClass('active');
                        $(this).children('ul').addClass('d-none');
                        $(this).children('a').children('i').removeClass('arrow-rotate');
                    }
                });
                $(this).parent().addClass('active');
                $(this).next().removeClass('d-none');
            }

            if($(this).children('i').hasClass('arrow-rotate')) {
                $(this).children('i').removeClass('arrow-rotate');
            } else {
                $(this).children('i').addClass('arrow-rotate');
            }
        });
        
    </script>

@stack('script')
</body>
</html>