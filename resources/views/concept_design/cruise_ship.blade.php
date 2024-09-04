@extends('layouts.index')

@section('content')

    <h3 class="text-center quicksand-300 pt-3 pb-5 text-uppercase subtitle">CRUISE SHIP</h3>

    <div id="concept_design_wrap" class="">

        <div class="row gx-3">

            @for($i = 1; $i < 5; $i++)

                <div class="col-12 col-sm-6 mb-3">
                        <img src="{{asset('assets/img/thumbnails/CD_3_'.$i.'.png')}}"
                             data-img="{{asset('assets/img/concept_design/CD_3_'.$i.'.png')}}"
                             class="concept_design_item img-fluid border shadow-sm rounded">
                </div>
            @endfor


        </div>
    </div>

@endsection
