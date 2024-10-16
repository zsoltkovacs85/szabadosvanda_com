{{--
@extends('layouts.index')

@section('content')

    <div class="row">
        <h3 class="text-center raleway-200 my-5 text-uppercase subtitle">Details</h3>
        @if(isset($images) && count($images) > 0 )
            @foreach($images as $image)

            @endforeach
        @endif
    </div>

@endsection
--}}


@extends('layouts.default')
