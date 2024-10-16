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

            @if(isset($conceptDesigns) && count($conceptDesigns) > 0 )
                @foreach($conceptDesigns as $conceptDesign)

                    @if( $conceptDesign['no_img'] == 1)

                        <div class="col-12 col-sm-4 mb-3">
                            <img src="{{env('ADMIN_URL')}}/{{$conceptDesign['thumbnail']}}"
                                 data-img="{{env('ADMIN_URL')}}/{{$conceptDesign['gallery_img']}}"
                                 class="concept_design_item img-fluid border shadow-sm rounded"
                                 alt="{{$conceptDesign['name']}}">
                        </div>
                    @else

                        <div class="col-12 col-sm-4 mb-3">
                            <a href="concept-design/{{$conceptDesign['url']}}">
                                <img src="{{env('ADMIN_URL')}}/{{$conceptDesign['thumbnail']}}"
                                     class="img-fluid border shadow-sm rounded"
                                     alt="">
                            </a>
                        </div>

                    @endif

                @endforeach
            @endif

               {{-- <div class="col-12 col-sm-4 mb-3">
                    <img src="{{url('assets/img/thumbnails/tit_1.png')}}"
                         data-img="{{url('assets/img/concept_design/CDCON_1.png')}}"
                         class="concept_design_item img-fluid border shadow-sm rounded"
                         alt="Caribbean girl">
                </div>

                <div class="col-12 col-sm-4 mb-3">
                    <img src="{{url('assets/img/thumbnails/tit_2.png')}}"
                         data-img="{{url('assets/img/concept_design/CDCON_2.png')}}"
                         class="concept_design_item img-fluid border shadow-sm rounded"
                         alt="Baby Panda">
                </div>--}}

              {{--  <div class="col-12 col-sm-4 mb-3">
                    <a href="{{url('concept-design/cruise-ship')}}">
                        <img src="{{url('assets/img/thumbnails/tit_3.png')}}"
                             class="img-fluid border shadow-sm rounded"
                             alt="">
                    </a>
                </div>--}}

               {{-- <div class="col-12 col-sm-4 mb-3">
                    <img src="{{url('assets/img/thumbnails/tit_4.png')}}"
                         data-img="{{url('assets/img/concept_design/CDCON_4.png')}}"
                         class="concept_design_item img-fluid border shadow-sm rounded"
                         alt="Snake Artist">
                </div>

                <div class="col-12 col-sm-4 mb-3">
                    <img src="{{url('assets/img/thumbnails/tit_5.png')}}"
                         data-img="{{url('assets/img/concept_design/CDCON_5.png')}}"
                         class="concept_design_item img-fluid border shadow-sm rounded"
                         alt="Poker Player">
                </div>--}}

               {{-- <div class="col-12 col-sm-4 mb-3">
                    <img src="{{url('assets/img/thumbnails/tit_6.png')}}"
                         data-img="{{url('assets/img/concept_design/CDCON_6.png')}}"
                         class="concept_design_item img-fluid border shadow-sm rounded"
                         alt="Surfer">
                </div>

                <div class="col-12 col-sm-4 mb-3">
                    <img src="{{url('assets/img/thumbnails/tit_7.png')}}"
                         data-img="{{url('assets/img/concept_design/CDCON_7.png')}}"
                         class="concept_design_item img-fluid border shadow-sm rounded"
                         alt="Elephant">
                </div>--}}
        </div>
    </div>

@endsection
