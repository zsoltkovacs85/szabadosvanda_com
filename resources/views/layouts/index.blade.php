<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery.min.css"
          rel="stylesheet">
    <title>Vanda Szabados Portfolio Website</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div id="site_layout" class="">
    <!-- IMG ZOOM -->
    {{--<div id="img_zoom_modal" class="position-absolute bg-secondary top-0 bottom-0 start-0 end-0 w-100 h-100 zindex-5"></div>--}}
    <header class="mt-5">
        <div class="container">
            <h1 class="text-center mt-5 text-uppercase raleway-200">{{__('Vanda Szabados')}}</h1>
            <h3 class="text-center text-uppercase raleway-400 subtitle">{{__('Portfolio')}}</h3>
            <nav class="navbar navbar-expand-lg mt-3">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto raleway-300 text-uppercase">
                            <li class="nav-item">
                                <a class="nav-link  @if(!request()->segment(1)) active @endif" aria-current="page"
                                   href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->segment(1) == 'character-designs' ) active @endif"
                                   href="{{url('concept-design')}}">Concept Design</a>
                            </li>
                            {{-- <li class="nav-item">
                                 <a class="nav-link @if(request()->segment(1) == 'illustrations') active @endif"
                                    href="{{url('illustrations')}}">Illustration
                                 </a>
                             </li>--}}
                            <li class="nav-item">
                                <a class="nav-link @if(request()->segment(1) == 'about') active @endif"
                                   href="{{url('about')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->segment(1) == 'contact') active @endif"
                                   href="{{url('contact')}}">Contact</a>
                            </li>
                            {{--<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>--}}
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="mt-5">
        <div class="container text-center">
            @yield('content')
        </div>
    </main>
    <!-- FOOTER -->
    <footer class="">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="d-flex justify-content-center raleway-200">
                        <a href="{{url('/cookie-policy')}}" class="me-2">Cookie Policy</a> |
                        <a href="{{url('/privacy-statement')}}" class="ms-2">Privacy Statement</a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 text-center">
                    <div id="copyright" class="raleway-200" role="contentinfo">
                        © {{date('Y', time())}} Vanda Szabados
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Modal -->
<div class="modal fade " id="zoom_img_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Concept design</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
               <img src="" class="img-f/luid">
            </div>
          {{--  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>--}}
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js"></script>

</body>
</html>
