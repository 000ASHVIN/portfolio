<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        a:hover {
            text-decoration: none;
        }
        .nav-bar li {
            list-style-type: none;
            padding-right: 20px;
        }
        .nav-bar li a {
            color: black;
            font-weight: 500;
            padding-bottom: 1px;
        }
        .nav-bar li a.active {
            border-bottom: 2px solid gray;
        }
    </style>
    @yield('css')
    <?php
    $url = $_SERVER['REQUEST_URI'];
    // dd($url)
    ?>
</head>
<body>
    <header class="sticky-top">
        {{-- <div class="logo">
            <img src="" alt="">
        </div> --}}
        <nav class="nav-bar">
            <ul class="d-flex justify-content-center pl-0 mt-3">
                <li><a href="/" class="@if($url == "/") active @endif">Home</a></li>
                <li><a href="/portfolio" class="@if($url == "/portfolio") active @endif">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@stack('script')
</body>
</html>