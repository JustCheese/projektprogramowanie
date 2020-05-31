@extends('layouts.app')
@section('content')
<img class="animeimg" src="/img/{{$film->id_film}}.jpg">
        {{ $film->nazwa }} <br />
        @if ($suma)
            <form action="/baza/{{$film->id_film}}" method="POST">
                @csrf
                <input type="submit" name="wypozycz" value="Wypożycz">
            </form>
        @else
            <h1> Aby wypożyczyć, proszę się zalogować! </h1>
        @endif
        {{ $film->opis }}
        
@endsection