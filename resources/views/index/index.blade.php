@extends('layouts.index')

@section('content')

    <!-- Slider main container -->
    <div class="swiper mySwiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @for($i = 1; $i < 12; $i ++)
                <div class="swiper-slide">
                    <img src="{{asset('assets/img/slider/slider_'.$i.'.png')}}"
                    >
                </div>
            @endfor
        </div>
    </div>

    <!-- Initialize Swiper -->
    <script>
        const swiper = new Swiper(".mySwiper", {});
    </script>

@endsection
