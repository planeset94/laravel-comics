@extends ('layout.app')
{{-- Collego il file CSS specifico --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">


@section('title', 'Fumetto')
@section('content')

    <div class="card">
        <div class="poster">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>



    </div>





@endsection


@section('footer')
