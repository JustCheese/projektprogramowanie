@extends('layouts.app')
@section('content')
<div class="container">
<img class="animeimg2" src="/img/{{$film->id_film}}.jpg" style="float: left"><br />
        <h1 style="color: rgb(68, 224, 231); margin-bottom: -25px;">{{ $film->nazwa }}</h1> <br />
        
        {{ $film->opis }}
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