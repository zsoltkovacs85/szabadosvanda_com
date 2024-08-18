@extends('layouts.index')

@section('content')

    <h3 class="text-center raleway-200 py-5 text-uppercase subtitle">Character Design</h3>

    <div id="concept_design_wrap" class="mb-5">

        <div class="row gx-3">


            @for($i = 1; $i < 7; $i++)

                <div class="col-12 col-sm-4 mb-3">
                    <img src="{{asset('assets/img/thumbnails/thumbnail_'.$i.'.png')}}"
                         data-img="{{asset('assets/img/concept_design/concept_design_'.$i.'.png')}}"
                         class="img-fluid border shadow-sm">
                </div>
            @endfor
            {{--  <h3 class="text-center raleway-200 my-5 text-uppercase subtitle">Character Design</h3>--}}
            {{-- @if(isset($characterDesigns) && count($characterDesigns) > 0 )
                 @foreach($characterDesigns as $characterDesign)
                     <div class="col-3">
                         <a href="{{url('character-designs/' . $characterDesign->url)}}">
                             <img src="{{env('ADMIN_URL')}}/{{$characterDesign->thumbnail}}" class="img-fluid">
                         </a>
                     </div>

                 @endforeach
             @endif--}}
           {{-- <div class="col-4">
                    <img src="{{asset('assets/img/concept_design/caribbean_girl.png')}}"
                         class="img-fluid border border-2 rounded">
            </div>
            <div class="col-4">
                    <img src="{{asset('assets/img/concept_design/panda_1.png')}}"
                         class="img-fluid border border-2 rounded">
            </div>
            <div class="col-4">
                    <img src="{{asset('assets/img/concept_design/beard_1.png')}}"
                         class="img-fluid border border-2 rounded">
            </div>--}}

        </div>
       {{-- <div class="row gx-3 mt-3">
            <div class="col-4">
                    <img src="{{asset('assets/img/concept_design/elephant_1.png')}}"
                         class="img-fluid border border-2 rounded">
            </div>
            <div class="col-4">
                    <img src="{{asset('assets/img/concept_design/hajo_1.png')}}"
                         class="img-fluid border border-2 rounded">
            </div>
            <div class="col-4">
                    <img src="{{asset('assets/img/concept_design/snake_1.png')}}"
                         class="img-fluid border border-2 rounded">
            </div>
        </div>--}}

    </div>

@endsection
