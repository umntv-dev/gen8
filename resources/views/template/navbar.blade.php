<header>
    <nav class="p-5 navbar navbar-expand-md navbar-fixed-top">
        <div class="w-100 row">
            <div class="d-flex col-lg-2 align-items-center justify-content-lg-center">
                <a href="/">
                    <img src="{{ asset('images/logo/logo-putih.png') }}" alt="logo" width="150">
                </a>
            </div>
            <div class="m-0 d-lg-flex col-lg-8 d-none align-items-center justify-content-center">
                @guest
                <a href="/" class="px-4 fs-5">PROGRAMS</a>
                <a href="/article" class="px-4 fs-5">ARTICLE</a>
                <a href="/crews" class="px-4 fs-5">CREWS</a>
                <a href="/about" class="px-4 fs-5">ABOUT</a>
            </div>
            <div class="d-lg-flex d-none col-lg-2 align-items-center justify-content-center">
                <a href="https://tv.umn.ac.id/onair" class="fs-5">TVONAIR 7.0</a>
            </div>
            @else
            <a href="/" class="px-4 fs-5">PROGRAMS</a>
                <a href="/article" class="px-4 fs-5">ARTICLE</a>
                <a href="/crews" class="px-4 fs-5">CREWS</a>
                <a href="/about" class="px-4 fs-5">ABOUT</a>
            </div>
            <div class="d-lg-flex d-none col-lg-2 align-items-center justify-content-center">
                <a href="https://tv.umn.ac.id/onair" class="fs-5">TVONAIR 7.0</a>
            </div>
            <div class="d-flex col-lg-3">
                <div class="nav-menu py-2"><a href="/">HOME</a></div>
                <div class="d-flex">
                    <a>
                        {{ Auth::user()->name }}
                    </a>
    
                    <div class="nav-menu py-2">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            @endguest
        </div>
    </nav>

    <div id="nav-icon3" class="d-lg-none d-flex">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="nav-main d-flex flex-column">
        <div class="nav-menu-container container">
            @guest
            <div class="nav-menu py-2"><a href="/">PROGRAMS</a></div>
            <div class="nav-menu py-2"><a href="/article">ARTICLE</a></div>
            <div class="nav-menu py-2"><a href="/crews">CREWS</a></div>
            <div class="nav-menu py-2"><a href="/about">ABOUT</a></div>
            <div class="nav-menu py-2"><a href="https://tv.umn.ac.id/onair">TVON AIR 7.0</a></div>
            @else
            <div class="nav-menu py-2"><a href="/">PROGRAMS</a></div>
            <div class="nav-menu py-2"><a href="/article">ARTICLE</a></div>
            <div class="nav-menu py-2"><a href="/crews">CREWS</a></div>
            <div class="nav-menu py-2"><a href="/about">ABOUT</a></div>
            <div class="nav-menu py-2"><a href="https://tv.umn.ac.id/onair">TVON AIR 7.0</a></div>
            <div class="nav-menu py-2"><a href="/">HOME</a></div>
            <div class="nav-meny py-2">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="nav-menu py-2" aria-labelledby="navbarDropdown">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest
            </div>
    </div>

    <nav class="nav-overlay">

    </nav>
</header>