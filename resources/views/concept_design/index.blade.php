@extends('layouts.index')

@section('content')

    <h3 class="text-center quicksand-300 pt-3 pb-5 text-uppercase subtitle">Concept Design</h3>

    <div id="concept_design_wrap" class="">

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
    </div>

@endsection
