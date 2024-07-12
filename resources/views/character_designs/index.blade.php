@extends('layouts.index')

@section('content')

    <div class="row" id="character-design-wrap">
        <h3 class="text-center raleway-200 my-5 text-uppercase subtitle">Character Design</h3>
        @if(isset($characterDesigns) && count($characterDesigns) > 0 )
            @foreach($characterDesigns as $characterDesign)
                <div class="col-3">
                    <a href="{{url('character-designs/' . $characterDesign->url)}}">
                        <img src="{{env('ADMIN_URL')}}/{{$characterDesign->thumbnail}}" class="img-fluid">
                    </a>
                </div>

            @endforeach
        @endif
      {{--  <div class="col">
            <a href="{{url('character-designs/url')}}">
                <img src="https://www.woutertulp.com/uploads/2/4/1/5/24156441/leo-poster_orig.jpg" class="img-fluid">
            </a>
        </div>
        <div class="col">
            <a href="{{url('character-designs/url')}}">
                <img src="https://www.woutertulp.com/uploads/2/4/1/5/24156441/leo-poster_orig.jpg" class="img-fluid">
            </a>
        </div>
        <div class="col">
            <a href="{{url('character-designs/url')}}">
                <img src="https://www.woutertulp.com/uploads/2/4/1/5/24156441/leo-poster_orig.jpg" class="img-fluid">
            </a>
        </div>
        <div class="col">
            <a href="{{url('character-designs/url')}}">
                <img src="https://www.woutertulp.com/uploads/2/4/1/5/24156441/leo-poster_orig.jpg" class="img-fluid">
            </a>
        </div>--}}
    </div>

@endsection
