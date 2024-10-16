@extends('layouts.index')

@section('content')

    <div class="row">
        <div class="col-12 col-sm-2"></div>
        <div class="col-12 col-sm-8">
            <h3 class="text-center quicksand-300 pt-3 pb-5  text-uppercase subtitle">Get in touch</h3>
            <p class="text-center mb-2 fs-5 quicksand-300">
                <a href="mailto:info@szabadosvanda.com"><i class="fa-regular fa-envelope"></i> {{$contact->email}}</a>
            </p>
            <p class="text-center mb-5 fs-5 quicksand-300"><i class="fa-solid fa-mobile-screen-button"></i>  {{$contact->phone}}</p>
        </div>
        <div class="col-12 col-sm-2"></div>
    </div>

@endsection
