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
            <div class="container">
                <p>Dc Power Visa <i class="far fa-registered"></i></p>
                <p>Additional DC Sities<i class="fas fa-caret-down"></i> </p>
            </div>
        </div>
        <nav class="menu">
            <div class="container">
                <a href="{{ route('characters') }}"
                    class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">Characters</a>
                <a href="{{ route('comics') }}"
                    class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">Comics</a>
                <a href="{{ route('movies') }}"
                    class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a>
                <a href="{{ route('tv') }}" class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">Tv</a>
                <a href="{{ route('games') }}"
                    class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">Games</a>
                <a href="{{ route('collectibles') }}"
                    class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">Collectibles</a>
                <a href="{{ route('videos') }}"
                    class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">Videos</a>
                <a href="{{ route('fans') }}"
                    class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">Fans</a>
                <a href="{{ route('news') }}"
                    class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">News</a>
                <a href="{{ route('shop') }}"
                    class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">Shop</a>
            </div>
        </nav>
        <div class="heade-bottom">
            <div class="container">
                <div class="current-series"></div>
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
        <div class="container">
            @yield('footer')
            <section class="top-footer">
                <div class="link-conteiner">
                    <div class="link-group">
                        <h3>DC COMICS</h3>
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
                    <div class="link-group">
                        <h3>DC</h3>
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
                    <div class="link-group">
                        <h3>SITES</h3>
                        <a href="#">DC</a>
                        <a href="#">MAD Magazine</a>
                        <a href="#">DC Kids</a>
                        <a href="#">DC Universe</a>
                        <a href="#">DC Power Visa</a>
                    </div>
                    <div class="link-group">
                        <h3>SHOP</h3>
                        <a href="#">Shop DC</a>
                        <a href="#">Shop DC Collectibles</a>
                    </div>


                </div>

                <p>All Site Content TM and @ 2020 DV Entertainment, unless otherwise <a href="#">noted here.</a> All
                    rights
                    reserved.</p>
                <p><a href="#">Cokies Settings</a></p>
        </div>
        </section>


        <section class="bottom-footer">
            <div class="container">
                <div class="sign">
                    <h3>Sign-Up Now!</h3>
                </div>

                <div class="socials">
                    <h3>Follow Us</h3>
                    <span><i class="fab fa-facebook-f"></i></span>
                    <span><i class="fab fa-twitter"></i></span>
                    <span><i class="fab fa-youtube"></i></span>
                    <span><i class="fab fa-pinterest-p"></i></span>
                    <span><i class="fas fa-map-marker-alt"></i> </span>

                </div>
            </div>
        </section>


    </footer>

</body>

</html>
