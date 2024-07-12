@extends('layouts.index')

@section('content')
    {{-- <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                   <div class="carousel-inner">
                       <div class="carousel-item active" data-bs-interval="2000">
                           <img src="https://torschrank.com/wp-content/uploads/2019/12/Home-27.png" class="d-block w-50" alt="...">
                       </div>
                       <div class="carousel-item" data-bs-interval="2000">
                           <img src="https://torschrank.com/wp-content/uploads/2019/12/Home-28.png" class="d-block w-50" alt="...">
                       </div>
                       <div class="carousel-item" data-bs-interval="2000">
                           <img src="https://torschrank.com/wp-content/uploads/2019/07/Home-22-1.png" class="d-block w-50" alt="...">
                       </div>
                   </div>
                  --}}{{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                   </button>--}}{{--
               </div>--}}

    {{--   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-inner">
               <div class="carousel-item active">
                   <img class="d-block w-100" src="https://torschrank.com/wp-content/uploads/2019/12/Home-27.png" alt="" width="600">
               </div>
               <div class="carousel-item">
                   <img class="d-block w-100 "src="https://torschrank.com/wp-content/uploads/2019/12/Home-28.png" alt="" width="600">
               </div>
               <div class="carousel-item">
                   <img class="d-block w-100 "src="https://torschrank.com/wp-content/uploads/2019/12/Home-27.png" alt="" width="600">
               </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
           </button>
       </div>--}}
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @if(isset($images) && count($images) > 0 )
                @foreach($images as $image)
                    <div class="swiper-slide">
                        <img src="{{env('ADMIN_URL')}}/{{$image->path}}" alt="" width="500">
                    </div>
                @endforeach
            @endif
        </div>
        <!-- If we need pagination -->
        {{--<div class="swiper-pagination"></div>--}}

        <!-- If we need navigation buttons -->
      {{--  <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>--}}

        <!-- If we need scrollbar -->
       {{-- <div class="swiper-scrollbar"></div>--}}
    </div>

@endsection
