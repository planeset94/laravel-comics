<footer id="site_footer">

    @yield('footer')
    {{-- TOP FOOTER --}}
    <section class="top-footer">
        <div class="container">
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

            <div class="big-logo">
                <img src="{{ asset('img/dc-logo-bg.png') }}" alt="Big logo DC">

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
