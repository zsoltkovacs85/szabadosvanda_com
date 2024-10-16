@extends('layouts.index')

@section('content')

    <div class="d-flex justify-content-center">
        <div class="mySlideshow">
            @if(isset($images) && count($images) > 0 )
                @foreach($images as $image)
                    <a href="javascript:void(0)">
                        <img src="{{env('ADMIN_URL')}}/{{$image->path}}" alt="" title="">
                    </a>
                @endforeach
            @endif




            {{-- @for($i = 1; $i < 7; $i ++)
                 <a href="javascript:void(0)">
                     <img src="{{asset('assets/img/slider/SLM_'.$i.'.png')}}">
                 </a>
             @endfor--}}
        </div>
    </div>
@endsection
