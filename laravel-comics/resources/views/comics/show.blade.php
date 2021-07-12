@extends ('layout.app')
{{-- Collego il file CSS specifico --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">


@section('title', 'Fumetto')
@section('content')
    {{-- BARRA BLUE --}}
    <div class="blue-bar"></div>
    {{-- /BARRA BLUE --}}
    <div class="container">
        {{-- CARTOLINA --}}
        <div class="card">
            <div class="poster">
                <img src="{{ $comic['thumb'] }}" alt="">
                <p class="book UPPER-CASE">Comic Book</p>
                <p class="gallery UPPER-CASE">
                    <a href="{{ route('comics') }}">View Gallery</a>
                </p>
            </div>

        </div>
        {{-- /CARTOLINA --}}

        {{-- SECTION 1 --}}
        <div class="section-one">
            <div class="info-card">
                <h1 class="album-title UPPER-CASE">
                    {{ $comic['title'] }}
                </h1>
                <div class="market">
                    <div class="price">
                        <p>US price:</p>
                        <p>{{ $comic['price'] }}</p>
                    </div>
                    <div class="availability">
                        <select name="availability" id="availability">
                            <option value="check" selected disabled hidden>Check Availability</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
                <p class="desc">
                    {{ $comic['description'] }}
                </p>
            </div>
            <div class="advertisement">

            </div>










        </div>
        {{-- /SECTION 1 --}}

        {{-- SECTION 2 --}}
        <div class="section-two"></div>
        {{-- /SECTION 2 --}}


    </div>
@endsection


@section('footer')
