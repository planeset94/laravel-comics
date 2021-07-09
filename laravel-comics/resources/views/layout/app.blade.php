<?php
//Creo una struttura dati per la nav
$menu = [
[
'href' => route('characters'),
'text' => 'characters',
],
[
'href' => route('comics'),
'text' => 'comics',
],
[
'href' => route('movies'),
'text' => 'movies',
],
[
'href' => route('tv'),
'text' => 'tv',
],
[
'href' => route('games'),
'text' => 'games',
],
[
'href' => route('collectibles'),
'text' => 'collectibles',
],
[
'href' => route('videos'),
'text' => 'videos',
],
[
'href' => route('fans'),
'text' => 'fans',
],
[
'href' => route('news'),
'text' => 'news',
],
[
'href' => route('shop'),
'text' => 'shop',
],
]; ?>


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
    @include('partials.header')
    {{-- /Site Header --}}

    <main id="main_content">

        @yield('content')

    </main>

    {{-- SITE FOOTER --}}
    @include ('partials.footer')
    {{-- /SITE FOOTER --}}
</body>

</html>
