@extends('layouts.index')

@section('content')

    <!-- Set up your HTML -->
    <div class="d-flex justify-content-center">
        <div class="owl-carousel">
            @for($i = 1; $i < 11; $i ++)
                <img src="{{asset('assets/img/slider/SL'.$i.'.png')}}">
            @endfor
        </div>
    </div>
@endsection
