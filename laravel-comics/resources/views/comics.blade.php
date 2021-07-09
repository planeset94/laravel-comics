@extends('layout.app')

@section('title', 'Home Page')

@section('content')

    @foreach ($comics as $comic)
        <div class="comic">
            <img src="{{ $comic['thumb'] }}" alt="">
            {{ $comic['series'] }}
        </div>
    @endforeach


@endsection







@section('footer')
