@extends('layouts.index')

@section('content')

    <h3 class="text-center quicksand-300 pt-3 pb-5 text-uppercase subtitle">Concept Design</h3>

   {{-- <div id="concept_design_wrap" class="">

        <div class="row gx-3">

            @for($i = 1; $i < 7; $i++)

                <div class="col-12 col-sm-4 mb-3">
                    @if($i == 3)
                        <a href="{{url('/concept-design/cruise-ship')}}">
                            <img src="{{asset('assets/img/thumbnails/ti_'.$i.'.png')}}"
                                 class="img-fluid border shadow-sm rounded">
                        </a>
                    @else
                        <img src="{{asset('assets/img/thumbnails/ti_'.$i.'.png')}}"
                             data-img="{{asset('assets/img/concept_design/CD_'.$i.'.png')}}"
                             class="concept_design_item img-fluid border shadow-sm rounded">
                    @endif
                </div>
            @endfor
        </div>
    </div>--}}

    <div id="concept_design_wrap" class="">
        <div class="row gx-3">

            <div class="col-12 col-sm-4 mb-3">
                <img src="{{url('assets/img/thumbnails/ti_1.png')}}"
                     data-img="{{url('assets/img/concept_design/CD_1.png')}}"
                     class="concept_design_item img-fluid border shadow-sm rounded"
                     alt="Caribbean girl">
            </div>

            <div class="col-12 col-sm-4 mb-3">
                <img src="{{url('assets/img/thumbnails/ti_2.png')}}"
                     data-img="{{url('assets/img/concept_design/CD_2.png')}}"
                     class="concept_design_item img-fluid border shadow-sm rounded"
                     alt="Panda">
            </div>

            <div class="col-12 col-sm-4 mb-3">
                <a href="{{url('concept-design/cruise-ship')}}">
                    <img src="{{url('assets/img/thumbnails/ti_3.png')}}"
                         class="img-fluid border shadow-sm rounded"
                         alt="">
                </a>
            </div>

            <div class="col-12 col-sm-4 mb-3">
                <img src="{{url('assets/img/thumbnails/ti_4.png')}}"
                     data-img="{{url('assets/img/concept_design/CD_4.png')}}"
                     class="concept_design_item img-fluid border shadow-sm rounded"
                     alt="Snake Artist">
            </div>

            <div class="col-12 col-sm-4 mb-3">
                <img src="{{url('assets/img/thumbnails/ti_5.png')}}"
                     data-img="{{url('assets/img/concept_design/CD_5.png')}}"
                     class="concept_design_item img-fluid border shadow-sm rounded"
                     alt="Poker Player">
            </div>

            <div class="col-12 col-sm-4 mb-3">
                <img src="{{url('assets/img/thumbnails/ti_6.png')}}"
                     data-img="{{url('assets/img/concept_design/CD_6.png')}}"
                     class="concept_design_item img-fluid border shadow-sm rounded"
                     alt="Elefant">
            </div>
        </div>
    </div>

@endsection
