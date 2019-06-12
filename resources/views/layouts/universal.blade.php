<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
        <!-- Google fonts - Roboto-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
        <!-- Bootstrap Select-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
        <!-- owl carousel-->
        <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.css') }}">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.blue.css') }}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
        <!-- Favicon and apple touch icons-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/apple-touch-icon-152x152.png') }}">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <div id="all">
            @guest
                <!-- Top bar-->
                @include('components.layouts.topbar')
                <!-- Top bar end-->
            @endguest

            <!-- Login Modal-->
            @section('loginModal')
            @show
            <!-- Login modal end-->

            <!-- Register Modal-->
            @section('registerModal')
            @show
            <!-- Register modal end-->

            <!-- Authentication Links -->
            @auth
                <!-- Navbar Start-->
                @include('components.layouts.mynavbar')
                <!-- Navbar End-->
            @endauth

            @guest
                <!-- Carraousel Start -->
                @include('components.layouts.carraousel')
                <!-- Carraousel End -->
            @endguest

            @auth
                <!-- Content Start -->
                @yield('content')
                <!-- Content End -->
                
                <!-- Footer Start -->
                @include('components.layouts.footer')
                <!-- Footer End -->
            @endauth

        </div>
        <!-- Javascript files-->
        @section('footerScript')
            <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/popper.js/umd/popper.min.js') }}"> </script>
            <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
            <script src="{{ asset('assets/vendor/waypoints/lib/jquery.waypoints.min.js') }}"> </script>
            <script src="{{ asset('assets/vendor/jquery.counterup/jquery.counterup.min.js') }}"> </script>
            <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.parallax-1.1.3.js') }}"></script>
            <script src="{{ asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/jquery.scrollto/jquery.scrollTo.min.js') }}"></script>
            <script src="{{ asset('assets/js/front.js') }}"></script>
        @show
    </body>
</html>
