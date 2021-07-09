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
                @foreach ($menu as $item)
                    <a href="{{ $item['href'] }}"
                        id="{{ Route::currentRouteName() === $item['text'] ? 'active' : '' }}">{{ $item['text'] }}
                    </a>
                @endforeach

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
