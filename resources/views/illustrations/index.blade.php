@extends('layouts.index')

@section('content')

    <div class="row">
        <h3 class="text-center raleway-200 my-5 text-uppercase subtitle">Illustration</h3>
        @if(isset($illustrations) && count($illustrations) > 0 )
            @foreach($illustrations as $illustration)
                <div class="col-3">
                    <a href="{{url('illustrations/' . $illustration->url)}}">
                        <img src="{{env('ADMIN_URL')}}/{{$illustration->thumbnail}}" class="img-fluid">
                    </a>
                </div>

            @endforeach
        @endif
    </div>

@endsection
