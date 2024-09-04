@extends('layouts.index')

@section('content')

    <!-- Set up your HTML -->
    {{-- <div class="d-flex justify-content-center">
         <div class="owl-carousel">
             @for($i = 1; $i < 11; $i ++)
                 <img src="{{asset('assets/img/slider/SL'.$i.'.png')}}">
             @endfor
         </div>
     </div>--}}

    <div class="d-flex justify-content-center">
        <div class="mySlideshow">
            @for($i = 1; $i < 11; $i ++)
                <a href="javascript:void(0)">
                    <img src="{{asset('assets/img/slider/SL'.$i.'.png')}}">
                </a>
            @endfor
        </div>
    </div>
@endsection
