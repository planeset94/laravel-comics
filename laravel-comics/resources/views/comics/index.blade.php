@extends('layout.app')

@section('title', 'Home Page')

@section('content')

    @foreach ($comics as $comic)
        <div class="comic">
            <img src="{{ $comic['thumb'] }}" alt="">
            <h6 class="UPPER-CASE"> {{ $comic['series'] }}</h6>
        </div>
    @endforeach


@endsection







@section('footer')
