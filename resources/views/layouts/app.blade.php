<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/3c7f5856f6.js" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    {{-- @if (isset($pageDatas))
        <title>{{ $pageDatas->meta_title }}</title>
    @else
    <title>{{ $homeDatas ?? ''->meta_title }}</title>
    @endif --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>


    <!-- Favicon -->
    <link href="/uploads/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- All CSS -->
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/css/select2.min.css">
    <link rel="stylesheet" href="/css/select2-bootstrap.min.css">
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
    <link rel="stylesheet" href="/css/meanmenu.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/spacing.css">

    <!-- Styles -->

    <link rel="stylesheet" href="/css/font-awesome.min.css">  
    {{-- <link rel="stylesheet" href="/css/app.css">   --}}

        <!-- All JS -->

    <script src="/js/jquery.min.js"></script>
    <script src="https://js.stripe.com/v2/"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.filterizr.min.js"></script>
    <script src="/js/jquery.meanmenu.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/select2.full.js"></script>
    <script src="/js/sweetalert2.min.js"></script>
    <script src="https://kit.fontawesome.com/bac71461de.js" crossorigin="anonymous"></script>


</head>

<body>
    <div id="app">
        @include('layouts.header')
        @include('layouts.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>
</html>
