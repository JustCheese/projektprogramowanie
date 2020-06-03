@extends('layouts.app')
@section('content')
<div class="container">
<img class="animeimg2 imgonsite" src="/img/{{$film->id_film}}.jpg"><br />
        <h1 style="color: rgb(68, 224, 231); margin-bottom: -25px;">{{ $film->nazwa }}</h1> <br />
        
        Opis: {{ $film->opis }}<br />
        Gatunek: {{ $film->gatunek }}<br />
        Reżyser: {{ $film->reżyser }}<br />
        Rok premiery: {{ $film->rok_premiery }}<br />
        
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