@extends('layouts.index')

@section('content')

    <!-- Set up your HTML -->
    <div class="d-flex justify-content-center">
        <div class="owl-carousel">
            @for($i = 1; $i < 12; $i ++)
                <img src="{{asset('assets/img/slider/slider_'.$i.'.png')}}">
            @endfor
        </div>
    </div>

    <!-- Slider main container -->
    {{--  <div class="swiper mySwiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
              @for($i = 1; $i < 12; $i ++)
                  <div class="swiper-slide">
                      <img src="{{asset('assets/img/slider/slider_'.$i.'.png')}}"
                      >
                  </div>
              @endfor
          </div>
      </div>--}}
@endsection
