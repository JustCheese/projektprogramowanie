@extends('layouts.app')
@section('content')
<div class="container"><br /><br />
<img class="animeimg2 imgonsite" src="/img/{{$film->id_film}}.jpg"><br />
        <h1 class="blue" style="margin-bottom: -25px;">{{ $film->nazwa }}</h1> <br />
        
        <span class="blue2">Opis:</span> {{ $film->opis }}<br />
        <span class="blue2">Gatunek:</span> {{ $film->gatunek }}<br />
        <span class="blue2">Reżyser:</span> {{ $film->reżyser }}<br />
        <span class="blue2">Rok premiery:</span> {{ $film->rok_premiery }}<br />
        
        @if ($suma)
            <form action="/baza/{{$film->id_film}}" method="POST">
                @csrf
                <input style="float: right;" type="submit" name="wypozycz" value="Wypożycz" class="btt">
            </form><br /><br />
        @else
            <h1> Aby wypożyczyć, proszę się zalogować! </h1>
        @endif
        </div>
@endsection