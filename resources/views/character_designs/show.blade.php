@extends('layouts.index')

@section('content')

    <div class="row">
        <h3 class="text-center raleway-200 my-5 text-uppercase subtitle">Details</h3>
        @if(isset($images) && count($images) > 0 )
            @foreach($images as $image)
                <div class="col-12 mb-5">
                    <img src="{{env('ADMIN_URL')}}/{{$image->path}}" class="img-fluid">
                </div>

            @endforeach
        @endif

    </div>

@endsection
