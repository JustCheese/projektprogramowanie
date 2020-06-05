@extends('layouts.app')
@section('content')
    <div class="container">
    <h1 style="text-align: center;">BAZA FILMÓW<h1>
    <form class="sr2" action="/baza" method="POST">
        @csrf
        <input class="wyszukiwarka" placeholder="Wyszukaj" type="text" name="name" required>
        <input class="fa btt2 wyszsub" type="submit" name="search" value="&#xf002">
    </form>
    @if($search)
    <div class="row">
        @foreach($search as $search)
        <div class="col-xs-12 input-position text-center col-sm-6 col-md-4 col-lg-3 col-xl-3" id="{{$search->id_film}}">
            <a href="/baza/{{$search->id_film}}"><img class="animeimg" src="img/{{$search->id_film}}.jpg"></a>
        </div>
        @endforeach
    <div>
    @endif
    @if(!$search)
    <div class="row">
        @foreach($filmy as $film)
        <div class="col-xs-12 input-position text-center col-sm-6 col-md-4 col-lg-3 col-xl-3" id="{{$film->id_film}}">
            <a href="/baza/{{$film->id_film}}"><img class="animeimg" src="img/{{$film->id_film}}.jpg"></a>
        </div>
        @endforeach
    <div>
    @endif
    </div>
    <script src="https://kit.fontawesome.com/5c2fca66e1.js" crossorigin="anonymous"></script>
@endsection