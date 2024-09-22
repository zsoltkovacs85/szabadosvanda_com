@extends('layouts.index')

@section('content')

    <div class="d-flex justify-content-center">
        <div class="mySlideshow">
            @for($i = 1; $i < 7; $i ++)
                <a href="javascript:void(0)">
                    <img src="{{asset('assets/img/slider/SLM_'.$i.'.png')}}">
                </a>
            @endfor
        </div>
    </div>
@endsection
