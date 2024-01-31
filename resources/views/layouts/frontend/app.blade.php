<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>TBL</title>
        <link rel="stylesheet" id="style" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
        <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" id="style" href="{{ asset('assets/css/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" id="style" href="{{ asset('assets/libs/owl-carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" id="style" href="{{ asset('assets/css/style-app.css') }}">
        @stack('styles')
    </head>
    <body style="overflow-x: hidden;">
        @yield('content')
        @if(Request::segment(1) !== 'question')
            @include('components.frontend.partials.navbar')
        @else
            @include('components.frontend.questions.helpers')
        @endif

        <!-- JQuery -->
        <script src="{{ asset('assets/js/jquery/jquery-3.7.1.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
        <script src="{{ asset('assets/libs/owl-carousel/dist/owl.carousel.min.js') }}"></script>
        <script>
            // $(document).ready(function () {
            //     // auto timer
            //     setTimeout(function() {
            //         $('#lab-slide-bottom-popup').modal('show');
            //     }, 5000); // optional - automatically opens in xxxx milliseconds

            //     $(document).ready(function() {
            //         $('.lab-slide-up').find('a').attr('data-toggle', 'modal');
            //         $('.lab-slide-up').find('a').attr('data-target', '#lab-slide-bottom-popup');
            //     });
            // })
        </script>
        @stack('scripts')
    </body>
</html>