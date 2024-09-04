<!doctype html>
<html lang="en">
<head>
    <!-- Regular Meta Info -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Zsolt Kovacs - Web Developer">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Facebook Meta Info -->
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:see_also" content="">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="{{asset('assets/vendor/owlcarousel_v_2_3_4/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owlcarousel_v_2_3_4/dist/assets/owl.theme.default.min.css')}}">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/dcc6e338c9.js" crossorigin="anonymous"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>{{__('Vanda Szabados Portfolio Website')}}</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div id="site_layout">
    <x-header/>
    <!-- MAIN -->
    <main class="my-5">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <x-footer/>
</div>

<!-- IMG ZOOM Modal -->
<x-modals.img-zoom/>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- OWL Carousel JS -->
<script src="{{asset('assets/vendor/owlcarousel_v_2_3_4/dist/owl.carousel.min.js')}}"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="{{asset('assets/vendor/slideshowad/jquery.slideshowad.js')}}"></script>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop:true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav:false,
            dots: false,
           /* animateIn: 'fadeIn',
            animateOut: 'fadeOut',*/
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    });

    $('.mySlideshow').slideShowAd({

        duration: 1000,
        interval: 4000,
        width: 600,
        height: 600,
        backgroundColor:'#fff',

    });

</script>

</body>
</html>
