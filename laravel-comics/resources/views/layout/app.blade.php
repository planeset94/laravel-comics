<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Homepage')</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet"> --}}

    <!-- Icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    {{-- Site Header --}}
    <header id="site_header">
        <div class="header-top">
            <div class="container UPPER-CASE">
                <p>Dc Power Visa <i class="far fa-registered"></i></p>
                <p>Additional DC Sities<i class="fas fa-caret-down"></i> </p>
            </div>
        </div>
        <nav class="menu">
            <div class="container UPPER-CASE">
                <div class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC">
                </div>
                <div class="pages">
                    <a href="{{ route('characters') }}"
                        id="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">Characters</a>
                    <a href="{{ route('comics') }}"
                        id="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">Comics</a>
                    <a href="{{ route('movies') }}"
                        id="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a>
                    <a href="{{ route('tv') }}"
                        id="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">Tv</a>
                    <a href="{{ route('games') }}"
                        id="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">Games</a>
                    <a href="{{ route('collectibles') }}"
                        id="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">Collectibles</a>
                    <a href="{{ route('videos') }}"
                        id="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">Videos</a>
                    <a href="{{ route('fans') }}"
                        id="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">Fans</a>
                    <a href="{{ route('news') }}"
                        id="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">News</a>
                    <a href="{{ route('shop') }}"
                        id="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">Shop</a>
                </div>
                <div class="search">
                    <input type="search" name="search" id="search" placeholder="Search ">
                    <label for="search"><i class="fas fa-search"></i></label>

                </div>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <div class="current-series">
                    <h3 class="UPPER-CASE">current Series</h3>
                </div>
            </div>
        </div>

    </header>
    {{-- /Site Header --}}

    <main id="main_content">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer id="site_footer">

        @yield('footer')
        <section class="top-footer">
            <div class="container">
                <div class="big-logo">
                    <img src="{{ asset('img/dc-logo-bg.png') }}" alt="Big logo DC">

                </div>
                <div class="link-container">
                    <div class="group">
                        <h4 class="UPPER-CASE">DC COMICS</h4>
                        <a href="{{ route('characters') }}">Characters</a>

                        <a href="{{ route('comics') }}">Comics</a>
                        <a href="{{ route('movies') }}">Movies</a>
                        <a href="{{ route('tv') }}">Tv</a>
                        <a href="{{ route('games') }}">Games</a>
                        <a href="{{ route('collectibles') }}">Collectibles</a>
                        <a href="{{ route('videos') }}">Videos</a>
                        <a href="{{ route('fans') }}">Fans</a>
                        <a href="{{ route('news') }}">News</a>
                        <a href="{{ route('shop') }}">Shop</a>
                    </div>
                    <div class="group">
                        <h4 class="UPPER-CASE">DC</h4>
                        <a href="#">Term Of Use</a>
                        <a href="#">Privacy policy (New)</a>
                        <a href="#">ad Choices</a>
                        <a href="#">Advertising</a>
                        <a href="#">Jobs</a>
                        <a href="#">Subscription</a>
                        <a href="#">Talent Workshop</a>
                        <a href="#">CPSC Certificates</a>
                        <a href="#">Ratings</a>
                        <a href="#">Shop Help</a>
                        <a href="#">Contact Us</a>
                    </div>
                    <div class="group">
                        <h4>SITES</h4>
                        <a href="#">DC</a>
                        <a href="#">MAD Magazine</a>
                        <a href="#">DC Kids</a>
                        <a href="#">DC Universe</a>
                        <a href="#">DC Power Visa</a>
                    </div>
                    <div class="group">
                        <h4 class="UPPER-CASE">SHOP</h4>
                        <a href="#">Shop DC</a>
                        <a href="#">Shop DC Collectibles</a>
                    </div>
                    <span class="copyright">
                        <p>All Site Content TM and @ 2020 DV Entertainment, unless otherwise <a href="#">noted here.</a>
                            All
                            rights
                            reserved.</p>
                        <p><a href="#">Cokies Settings</a></p>
                    </span>
                </div>

            </div>
        </section>


        {{-- <section class="bottom-footer">
            <div class="container">
                <div class="sign">
                    <h3 class="UPPER-CASE">Sign-Up Now!</h3>
                </div>

                <div class="socials">
                    <h3 class="UPPER-CASE">Follow Us</h3>
                    <span><i class="fab fa-facebook-f"></i></span>
                    <span><i class="fab fa-twitter"></i></span>
                    <span><i class="fab fa-youtube"></i></span>
                    <span><i class="fab fa-pinterest-p"></i></span>
                    <span><i class="fas fa-map-marker-alt"></i> </span>

                </div>
            </div>
        </section> --}}


    </footer>

</body>

</html>
