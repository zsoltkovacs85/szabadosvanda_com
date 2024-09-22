<!-- HEADER -->
<header class="mt-4">
    <div class="container">
        <h1 class="text-center text-uppercase quicksand-500">{{__('Vanda Szabados')}}</h1>
        <h3 class="text-center text-uppercase quicksand-400 subtitle">{{__('Portfolio')}}</h3>
        <nav class="navbar navbar-expand-lg mt-3">
            <div class="container-fluid">
                <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto quicksand-400 text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link  @if(!request()->segment(1)) active @endif" aria-current="page"
                               href="{{url('/')}}">{{__('Home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->segment(1) == 'concept-design' ) active @endif"
                               href="{{url('concept-design')}}">{{__('Concept Design')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->segment(1) == 'about') active @endif"
                               href="{{url('about')}}">{{__('About')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->segment(1) == 'contact') active @endif"
                               href="{{url('contact')}}">{{__('Contact')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
