@extends('layouts.index')

@section('content')

    <div class="row">
        <h3 class="text-center raleway-200 my-5 text-uppercase subtitle">{{$page->title}}</h3>
        <div class="mb-5">
            {!! $page->desc !!}
        </div>
    </div>

@endsection
