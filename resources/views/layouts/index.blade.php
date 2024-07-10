<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <title>Vanda Szabados Portfolio website</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div id="site_layout" class="">
    <header class="mt-5">
        <div class="container">
            <h1 class="text-center mt-5 text-uppercase raleway-200">{{__('Vanda Szabados')}}</h1>
            <h3 class="text-center text-uppercase raleway-400 subtitle">{{__('Character Design')}}</h3>

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
                                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('character-designs')}}">Character Design</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('illustrations')}}">Illustration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('about-us')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('contact')}}">Contact</a>
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
    <footer></footer>
</div>
</body>
</html>
