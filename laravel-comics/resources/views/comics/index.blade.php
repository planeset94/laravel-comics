@extends('layout.app')

{{-- Collego il file CSS specifico --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">


@section('title', 'Home Page')
@section('content')
    <div class="container">


        <div class="current-series">
            <h3 class="UPPER-CASE">current Series</h3>
        </div>


        {{-- MOSTRO OGNI FUMETTO --}}
        <div class="card-container">
            @foreach ($comics as $index => $comic)
                <div class="comic">
                    <a href="{{ route('show', ['id' => $index]) }}">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </a>
                    <h6 class="UPPER-CASE"> {{ $comic['series'] }}</h6>
                </div>
            @endforeach

            <div class="more">
                <h6 class="UPPER-CASE">Load More</h6>
            </div>
        </div>
    </div>
    <div class="blue-section">
        <div class="container">
            <div class="blue-container">
                <div class="blue-card">
                    <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                    <h6 class="UPPER-CASE">Digital Comics</h6>
                </div>
                <div class="blue-card">
                    <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                    <h6 class="UPPER-CASE">Dc Merchandise</h6>
                </div>
                <div class="blue-card">
                    <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                    <h6 class="UPPER-CASE">Subscription</h6>
                </div>
                <div class="blue-card">
                    <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                    <h6 class="UPPER-CASE">Comic Shop Locator</h6>
                </div>
                <div class="blue-card">
                    <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                    <h6 class="UPPER-CASE">Dc Power Visa</h6>
                </div>
            </div>
        </div>

    </div>
@endsection
