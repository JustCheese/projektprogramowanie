@extends('layouts.app')
@section('content')
    <div class="container">
    <h1 style="text-align: center;">BAZA FILMÓW<h1>
    <div class="row">
        @foreach($filmy as $film)
        <div class="col-xs-12 input-position text-center col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <a href="/baza/{{$film->id_film}}"><img class="animeimg" src="img/{{$film->id_film}}.jpg"></a>
        </div>
        @endforeach
    <div>
    </div>
@endsection