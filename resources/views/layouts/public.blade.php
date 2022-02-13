<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EVIS') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/white.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->

    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link type="text/css" href="{{ asset('front') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('front') }}/css/style.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('front') }}/css/owl.css" rel="stylesheet">

</head>

<body class="{{ $class ?? '' }}">
    @if (Session::has('message'))
        <div class="mt-50" style="position:relative;
                z-index:1000;width:fit-content;">
            <div class="alert {{ Session::get('type') }} alert-dismissible fade show" role="alert" style="">
                <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-inner--text">{{ Session::get('message') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <div class="main-content">

        @include('layouts.navbars.front')

        @yield('content')

    </div>

    @guest()
        @include('layouts.footers.front')
    @endguest


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('front') }}/js/custom.js"></script>
    <script src="{{ asset('front') }}/js/owl.js"></script>


    @stack('js')

    <!-- Argon JS -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body>

</html>
