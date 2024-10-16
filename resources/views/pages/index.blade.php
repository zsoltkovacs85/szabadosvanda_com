@extends('layouts.index')

@section('content')

    <div class="row">
        <div class="col-12 col-sm-2"></div>
        <div class="col-12 col-sm-8">
            <div class="quicksand-400">
                <div class="row mb-5">
                    <h3 class="quicksand-300 text-uppercase pt-3 pb-5 subtitle text-center">{{$page->title}}</h3>
                </div>
                <div class="row">
                    {!! $page->desc !!}
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-2"></div>
    </div>
@endsection
