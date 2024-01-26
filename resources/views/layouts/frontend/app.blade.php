<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>TBL</title>
        <link rel="stylesheet" id="style" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" id="style" href="{{ asset('assets/css/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" id="style" href="{{ asset('assets/libs/owl-carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" id="style" href="{{ asset('assets/css/style-app.css') }}">
        @stack('styles')
    </head>
    <body>
        @yield('content')
        @include('components.frontend.partials.navbar')

        <!-- JQuery -->
        <script src="{{ asset('assets/js/jquery/jquery-3.7.1.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/owl-carousel/dist/owl.carousel.min.js') }}"></script>
        @stack('scripts')
    </body>
</html>