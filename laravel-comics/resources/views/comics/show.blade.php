@extends ('layout.app')
{{-- Collego il file CSS specifico --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">


@section('title', 'Fumetto')
@section('content')
    {{-- BARRA BLUE --}}
    <div class="blue-bar"></div>
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












    </div>
@endsection


@section('footer')
